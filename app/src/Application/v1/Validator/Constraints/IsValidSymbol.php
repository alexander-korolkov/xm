<?php

namespace App\Application\v1\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
#[\Attribute]
class IsValidSymbol extends Constraint
{
    public $message = 'The symbol "{{ string }}" is not valid.';
}
