<?php

namespace App\Application\v1\Service;

use PHPUnit\Util\Exception;
use Psr\Cache\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Throwable;

class FinanceDataService
{
    private HttpClientInterface $client;
    private string $apiKey;
    private string $financeRapidApiHost;
    private string $financeRapidApiPath;
    private CacheInterface $cache;
    private LoggerInterface $logger;

    public function __construct(HttpClientInterface $client,
                                CacheInterface $cache,
                                LoggerInterface $logger)
    {
        $this->client = $client;
        $this->cache = $cache;
        $this->apiKey = $_ENV['RAPIDAPI_KEY'];
        $this->financeRapidApiHost = $_ENV['RAPIDAPI_HOST'];
        $this->financeRapidApiPath = $_ENV['RAPIDAPI_PATH'];
        $this->logger = $logger;
    }

    /**
     * @param string $symbol
     * @param string $region
     * @return array
     */
    public function getHistoricalData(string $symbol, string $region = ''): array
    {
        // TODO: Add cache here as well.
       // return $this->cache->get($symbol.'_historical_data_cache_'.$region, callback: function (ItemInterface $item, $symbol, $region) {
            $data = [];

            try {
                $response = $this->client->request('GET', 'https://'.$this->financeRapidApiHost.$this->financeRapidApiPath, [
                    'headers' => [
                        'X-RapidAPI-Key' => $this->apiKey,
                        'X-RapidAPI-Host' => $this->financeRapidApiHost,
                    ],
                    'query' => [
                        'symbol' => $symbol,
                        //    'region' => $region,
                    ],
                ]);

                $statusCode = $response->getStatusCode();

                if ($statusCode === 200) {
                    $data = $response->toArray();
                    if (empty($data)) {
                        throw new Exception('The historical data is empty!');
                    }
                    return $data;
                }

                throw new \Exception("Failed to fetch historical data, status code: $statusCode");

            } catch (Throwable $t) {
                //TODO:log exception
                echo $t->getMessage(). PHP_EOL;

                $this->logger->error('An error occurred in FinanceDataService: ' . $t->getMessage(), ['exception' => $t]);
            }

            return $data;
       // });
    }

    /**
     * @param $symbol
     * @param $startDate
     * @param $endDate
     * @return array
     */
    public function getDataByDateRange($symbol, $startDate, $endDate): array
    {
        $sortedData = [];
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);

        $historicalData = $this->getHistoricalData($symbol);

        $offset = $historicalData["timeZone"]["gmtOffset"];

        foreach ($historicalData['prices'] as $priceObj) {
            $dateWithOffset = $priceObj['date'] - $offset;
            if ($startDate <= $dateWithOffset && $dateWithOffset >= $endDate) {
                // adjclose is not necessary.
                unset($priceObj['adjclose']);
                $priceObj['date'] = $dateWithOffset;
                //$sortedData[$dateWithOffset] = $priceObj;
                $sortedData[] = $priceObj;
            }
        }

        return $sortedData;
    }
}
