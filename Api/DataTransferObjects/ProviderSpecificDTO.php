<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class ProviderSpecificDTO extends DataTransferObject
{
    public ?array $documentVerification;
    public ?array $facialSimilarity;
    public ?array $errors;
}
