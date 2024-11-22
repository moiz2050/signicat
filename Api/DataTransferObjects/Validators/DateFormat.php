<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Validators;

use Attribute;
use DateTime;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
class DateFormat implements Validator
{
    public function __construct(private string $format)
    {
    }

    public function validate(mixed $value): ValidationResult
    {
        $date = DateTime::createFromFormat('!' . $this->format, $value);

        if ($date && $date->format($this->format) == $value) {
            return ValidationResult::valid();
        }

        return ValidationResult::invalid('Date format is not valid');
    }
}
