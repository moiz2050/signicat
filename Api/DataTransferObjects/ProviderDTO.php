<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use App\Support\Signicat\Api\DataTransferObjects\Validators\EnumValidator;
use App\Support\Signicat\Enums\ProcessTypes;
use App\Support\Signicat\Enums\Providers;
use App\Support\Signicat\Enums\Redacts;
use Spatie\DataTransferObject\DataTransferObject;

class ProviderDTO extends DataTransferObject
{
    #[EnumValidator(Providers::SIGNICAT_PAPER)]
    public string $provider;
    #[EnumValidator(ProcessTypes::UNATTENDED)]
    public ?string $processType;
    #[EnumValidator(Redacts::DATE)]
    public ?array $redact;
}
