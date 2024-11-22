<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Response;

use App\Support\Signicat\Api\DataTransferObjects\Casters\DateCaster;
use App\Support\Signicat\Api\DataTransferObjects\ProviderSpecificDTO;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class GetProcessResponse extends DataTransferObject
{
    public string $processId;
    public string $provider;
    public string $status;
    public ?string $processType;
    public ?bool $redactionRequested;
    public ?string $notificationUrl;
    #[CastWith(DateCaster::class)]
    public string $createdAt;
    #[CastWith(DateCaster::class)]
    public string $updatedAt;
    public ?ProviderSpecificDTO $providerSpecific;
    public ?array $finalResult;
    public ?array $failReason;
}
