<?php

namespace App\Application\v1\DTO;

use App\Application\v1\Validator\Constraints as AppAssert;
use Symfony\Component\Validator\Constraints as Assert;
#use App\Application\v1\Service\RetrieveValidSymbolsService;

class HistoricalQuotesRequest
{
    #[Assert\NotBlank]
    #[AppAssert\IsValidSymbol()]
    #[Assert\Type('string')]
    public string $companySymbol;

    #[Assert\LessThanOrEqual(propertyPath: "endDate")]
    #[Assert\Date]
    #[Assert\NotBlank]
    public string $startDate;

    #[Assert\Date]
    #[Assert\NotBlank]
    #[Assert\LessThanOrEqual('today')]
    public string $endDate;


    #[Assert\NotBlank]
    #[Assert\Email(
        message: 'The email {{ value }} is not a valid email.',
    )]
    public string $email;

    /**
     * @param array $data
     *
     * @return self
     */
    public static function createHQRequest(array $data): self
    {
        $instance = new self();
        $instance->companySymbol = $data['companySymbol'] ?? null;

        //$instance->startDate = $data['startDate'] ? \DateTime::createFromFormat('Y-m-d', $data['startDate']) : null;
        //$instance->endDate = $data['endDate'] ? \DateTime::createFromFormat('Y-m-d', $data['endDate']) : null;
        $instance->startDate = $data['startDate'] ?? null;
        $instance->endDate = $data['endDate'] ?? null;

        $instance->email = $data['email'] ?? null;

        return $instance;
    }
}
