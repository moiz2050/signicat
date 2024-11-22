<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Validators;

use Attribute;
use Spatie\DataTransferObject\Validation\ValidationResult;
use Spatie\DataTransferObject\Validator;
use BackedEnum;

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
class EnumValidator implements Validator
{
    public function __construct(private BackedEnum $enum, private bool $nullable = true)
    {
    }

    public function validate(mixed $value): ValidationResult
    {
        if ($this->nullable && is_null($value)) {
            return ValidationResult::valid();
        }

        $enum = class_basename($this->enum);
        if (is_array($value)) {
            foreach ($value as $item) {
                if (!$this->enum->tryFrom($item)) {
                    return ValidationResult::invalid("{$item} is not defined in {$enum} enum");
                }
            }
            return ValidationResult::valid();
        }

        if ($this->enum->tryFrom($value)) {
            return ValidationResult::valid();
        }

        return ValidationResult::invalid("{$value} is not defined in {$enum} enum");
    }
}
