<?php

namespace App\Application\v1\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use App\Application\v1\Service\RetrieveValidSymbolsService;

class IsValidSymbolValidator extends ConstraintValidator
{
    private RetrieveValidSymbolsService $retrieveValidSymbolsService;

    public function __construct(RetrieveValidSymbolsService $retrieveValidSymbolsService)
    {
        $this->retrieveValidSymbolsService = $retrieveValidSymbolsService;
    }

    public function validate($value, Constraint $constraint): void
    {
        if (!in_array($value, $this->retrieveValidSymbolsService->getValidValues())) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }
}
