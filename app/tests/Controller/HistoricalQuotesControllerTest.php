<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HistoricalQuotesControllerTest extends WebTestCase
{
    public function testHistoricalQuotesEndpoint()
    {
        $client = static::createClient();
        $data = [
            'companySymbol' => 'AAPL',
            'startDate' => '2022-01-01',
            'endDate' => '2022-01-31',
            'email' => 'example@example.com'
        ];

        $client->request(
            'POST',
            '/api/v1/historical-quotes-endpoint',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode($data)
        );

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $responseContent = json_decode($client->getResponse()->getContent(), true);

        $this->assertIsArray($responseContent);

        foreach ($responseContent as $item) {
            $this->assertIsArray($item);
            $this->assertArrayHasKey('date', $item);
            $this->assertArrayHasKey('open', $item);
            $this->assertArrayHasKey('high', $item);
            $this->assertArrayHasKey('low', $item);
            $this->assertArrayHasKey('close', $item);
            $this->assertArrayHasKey('volume', $item);
        }
    }

//    public function testHistoricalQuotesEndpointGetRequest()
//    {
//        $client = static::createClient();
//
//        $crawler = $client->request('GET', '/api/v1/historical-quotes-endpoint', [
//            'companySymbol' => 'AAPL',
//            'startDate' => '2022-01-01',
//            'endDate' => '2023-01-31',
//            'email' => 'example@example.com'
//        ]);
//
//        $this->assertResponseIsSuccessful();
//        $this->assertStringContainsString('No data for this period', $client->getResponse()->getContent());
//    }
}
