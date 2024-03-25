<?php

namespace App\Tests\Service;

use App\Application\v1\Service\FinanceDataService;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class FinanceDataServiceTest extends TestCase
{
    private $clientMock;
    private $cacheMock;
    private $loggerMock;

    protected function setUp(): void
    {
        $this->clientMock = $this->createMock(HttpClientInterface::class);
        $this->cacheMock = $this->createMock(CacheItemPoolInterface::class);
        $this->loggerMock = $this->createMock(LoggerInterface::class);
    }

    public function testGetHistoricalDataReturnsData()
    {
        $service = new FinanceDataService($this->clientMock, $this->cacheMock, $this->loggerMock);

        $responseMock = $this->createMock(ResponseInterface::class);
        $this->clientMock->method('request')->willReturn($responseMock);

        $expectedData = [
            'timeZone' => ['gmtOffset' => 0],
            'prices' => [
                ['date' => 1612137600, 'open' => 100, 'high' => 110, 'low' => 90, 'close' => 105, 'volume' => 1000],
            ],
        ];
        $responseMock->method('toArray')->willReturn($expectedData);

        $actualData = $service->getHistoricalData('AAPL');

        $this->assertEquals($expectedData, $actualData);
    }

    public function testGetDataByDateRangeFiltersCorrectly()
    {
        $service = $this->getMockBuilder(FinanceDataService::class)
            ->setConstructorArgs([$this->clientMock, $this->cacheMock, $this->loggerMock])
            ->onlyMethods(['getHistoricalData'])
            ->getMock();

        $historicalData = [
            'timeZone' => ['gmtOffset' => 0],
            'prices' => [
                ['date' => strtotime('2022-01-01'), 'open' => 100, 'high' => 110, 'low' => 90, 'close' => 105, 'volume' => 1000],
                ['date' => strtotime('2022-01-15'), 'open' => 150, 'high' => 160, 'low' => 140, 'close' => 155, 'volume' => 1500],
            ],
        ];

        $service->method('getHistoricalData')->willReturn($historicalData);

        $startDate = '2022-01-01';
        $endDate = '2022-01-31';

        $filteredData = $service->getDataByDateRange('AAPL', $startDate, $endDate);

        // Ensure the data is filtered correctly between start and end dates
        $this->assertCount(2, $filteredData);
        $this->assertContainsOnly('array', $filteredData);
    }
}
