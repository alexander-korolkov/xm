<?php

namespace App\Application\v1\Controller;

use App\Application\v1\DTO\HistoricalQuotesRequest;
use App\Application\v1\Service\CsvGeneratorService;
use App\Application\v1\Service\FinanceDataService;
use App\Application\v1\Service\MailService;
use App\Application\v1\Service\RetrieveValidSymbolsService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Throwable;

/**
 * @Route("/api", name="api_")
 */
class HistoricalQuotesController extends AbstractController
{
    private ValidatorInterface $validator;

    private JsonResponse $response;

    private FinanceDataService $financeDataService;

    private CsvGeneratorService $csvGeneratorService;

    private MailService $mailService;

    private LoggerInterface $logger;

    private RetrieveValidSymbolsService $retrieveValidSymbolsService;

    public function __construct(ValidatorInterface $validator,
                                FinanceDataService $financeDataService,
                                CsvGeneratorService $csvGeneratorService,
                                MailService $mailService,
                                RetrieveValidSymbolsService $retrieveValidSymbolsService,
                                LoggerInterface $logger)
    {
        $this->validator = $validator;
        $this->financeDataService = $financeDataService;
        $this->csvGeneratorService = $csvGeneratorService;
        $this->mailService = $mailService;
        $this->retrieveValidSymbolsService = $retrieveValidSymbolsService;
        $this->logger = $logger;
    }

    private function validateUserData($data): void
    {
        $historicalQuotesRequest =  HistoricalQuotesRequest::createHQRequest($data);

        $errors = $this->validator->validate($historicalQuotesRequest);

        if (count($errors) > 0) {
            $this->response = $this->json(['errors' => (string) $errors], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    /**
     * @param Request $request
     * @param MailService $mailService
     * @return JsonResponse
     */
    public function historicalQuotesEndpoint(Request $request, MailService $mailService): JsonResponse
    {
        $this->logger->error('TEST DATA: ' );
        if ($request->isMethod('POST')) {
            $data = json_decode($request->getContent(), true);
            $this->logger->error('TEST DATA: ' . print_r($data, true));

        } elseif ($request->isMethod('GET')) {
            $data = [
                'companySymbol' => $request->query->get('companySymbol'),
                'startDate' => $request->query->get('startDate'),
                'endDate' => $request->query->get('endDate'),
                'email' => $request->query->get('email')
            ];
        } elseif ($request->isMethod('OPTIONS')) {
            // Just in case. The nelmio/cors-bundle could be installed
            // in order to process GET, POST and OPTIONS globally.
            $response = new JsonResponse();
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');
            return $response;
        } else {
            return $this->json(['Unsupported request type'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $this->validateUserData($data);
        if (!empty($this->response)) {
            return $this->response;
        }

        try {
            $historicalData = $this->financeDataService
                ->getDataByDateRange($data['companySymbol'], $data['startDate'], $data['endDate']);

            if (!empty($historicalData)) {
                // Set response
                $this->response = $this->json($historicalData);

                // Create CSV File
                // TODO: put the generation to queque in order to increase performance?
                $filename = $data['companySymbol'].'_from_'.$data['startDate'].'_to_'.$data['endDate'].'.csv';
                $this->csvGeneratorService->generateCsv($historicalData, $filename, $this->logger);

                // Send email
                $companyName = $this->retrieveValidSymbolsService->getCompanyNameBySymbol($data['companySymbol']);
                $mailService->sendEmailWithCSV($data['email'], $companyName, $data['startDate'], $data['endDate'], $filename);

            } else {
                $this->response = $this->json(['No data for this period']);
            }

        } catch (Throwable $t) {
            echo $t->getMessage(). PHP_EOL;
            $this->logger->error('An error occurred in HistoricalQuotesController: ' . $t->getMessage(), ['exception' => $t]);
        }


        return $this->response ?? $this->json(['Can\'t process you request for some reasons']);
    }
}
