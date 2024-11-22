<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Request;

use App\Support\Signicat\Api\DataTransferObjects\CaptureParametersDTO;
use App\Support\Signicat\Api\DataTransferObjects\ProviderDTO;
use App\Support\Signicat\Api\DataTransferObjects\Validators\EnumValidator;
use App\Support\Signicat\Enums\Sdk;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;
use Spatie\DataTransferObject\DataTransferObject;

class StartCaptureFlowRequest extends DataTransferObject
{
    public string $dossierId;
    #[CastWith(ArrayCaster::class, ProviderDTO::class)]
    public array $providers;
    public string $redirectUrl;
    #[EnumValidator(Sdk::CAPTURE)]
    public ?string $sdk;
    public ?string $notificationUrl;
    public ?string $authorizationHeader;
    public ?CaptureParametersDTO $captureParameters;
}
