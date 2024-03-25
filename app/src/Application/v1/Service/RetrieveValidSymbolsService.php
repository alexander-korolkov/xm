<?php
/**
 * This service should get data from nasdaq
 * and return the list of available options for the Company Symbol field.
 */
namespace App\Application\v1\Service;

use PHPUnit\Util\Exception;
use Psr\Cache\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\ItemInterface;
use Throwable;

class RetrieveValidSymbolsService
{
    private HttpClientInterface $httpClient;
    private string $validValuesUrl;

    private CacheInterface $cache;

    private LoggerInterface $logger;

    public function __construct(HttpClientInterface $httpClient,
                                CacheInterface $cache,
                                LoggerInterface $logger)
    {
        $this->httpClient = $httpClient;
        $this->validValuesUrl = $_ENV['NASDAQ_LISTINGS'];
        $this->cache = $cache;
        $this->logger = $logger;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function getCompaniesData()
    {
        return $this->cache->get('getCompaniesData', callback: function (ItemInterface $item) {
            $symbolsAndNames = [];

            try {
                $response = $this->httpClient->request('GET', $this->validValuesUrl);
                $statusCode = $response->getStatusCode();
                if ($statusCode === 200) {
                    $companiesData = $response->toArray();

                    if (empty($companiesData)) {
                        throw new Exception('Company\'s data is empty!');
                    }

                    foreach ($companiesData as $companyData) {
                        $symbolsAndNames[$companyData['Symbol']] = $companyData['Company Name'];
                    }

                    return $symbolsAndNames;
                }

                throw new \Exception("Failed to fetch data, status code: $statusCode");

            } catch (Throwable $t) {
                //TODO:log exception
                echo $t->getMessage(). PHP_EOL;

                $this->logger->error('An error occurred in RetrieveValidSymbolsService: ' . $t->getMessage(), ['exception' => $t]);
            }
        });
    }

    /**
     * @return array
     * @throws InvalidArgumentException
     */
    public function getValidValues(): array
    {
        //return $this->cache->get('getValidSymbolValues', callback: function (ItemInterface $item) {
            //$item->expiresAfter(86400);

            $companiesData = $this->getCompaniesData();
            return array_keys($companiesData);
        //});
    }

    /**
     * @param string $symbol
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getCompanyNameBySymbol(string $symbol): mixed
    {
        //return $this->cache->get($symbol, callback: function (ItemInterface $item, $symbol) {
            $companiesData = $this->getCompaniesData();
            return $companiesData[$symbol] ?? null;
        //});
    }
}
