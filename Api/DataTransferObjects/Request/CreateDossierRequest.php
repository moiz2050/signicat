<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Request;

use Spatie\DataTransferObject\DataTransferObject;

class CreateDossierRequest extends DataTransferObject
{
    public ?string $externalReference;
}
