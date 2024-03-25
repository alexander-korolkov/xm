<?php

namespace App\Tests\Service;

use App\Application\v1\Service\RetrieveValidSymbolsService;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class RetrieveValidSymbolsServiceTest extends TestCase
{
    private $httpClientMock;
    private $cacheMock;
    private $loggerMock;

    protected function setUp(): void
    {
        $this->httpClientMock = $this->createMock(HttpClientInterface::class);
        $this->cacheMock = $this->createMock(CacheItemPoolInterface::class);
        $this->loggerMock = $this->createMock(LoggerInterface::class);
    }

    public function testGetCompaniesDataReturnsData()
    {
        $service = new RetrieveValidSymbolsService($this->httpClientMock, $this->cacheMock, $this->loggerMock);

        $cacheItemMock = $this->createMock(CacheItemInterface::class);
        $this->cacheMock->method('getItem')->willReturn($cacheItemMock);
        $cacheItemMock->method('isHit')->willReturn(false);
        $cacheItemMock->expects($this->once())->method('set');
        $this->cacheMock->expects($this->once())->method('save')->with($cacheItemMock);

        $responseMock = $this->createMock(ResponseInterface::class);
        $this->httpClientMock->method('request')->willReturn($responseMock);

        $mockData = [['Symbol' => 'AAPL', 'Company Name' => 'Apple Inc.']];
        $responseMock->method('toArray')->willReturn($mockData);

        $expected = ['AAPL' => 'Apple Inc.'];
        $actual = $service->getCompaniesData();

        $this->assertEquals($expected, $actual);
    }

    public function testGetCompaniesDataHandlesException()
    {
        $service = new RetrieveValidSymbolsService($this->httpClientMock, $this->cacheMock, $this->loggerMock);

        $this->httpClientMock->method('request')->will($this->throwException(new \Exception("Error")));

        $this->loggerMock->expects($this->once())->method('error');

        $this->expectException(\Exception::class);

        $service->getCompaniesData();
    }

    // TODO: test getValidValues and getCompanyNameBySymbol
}
