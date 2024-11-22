<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Response;

use App\Support\Signicat\Api\DataTransferObjects\Casters\DateCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

class CreateDossierResponse extends DataTransferObject
{
    public string $dossierId;
    #[CastWith(DateCaster::class)]
    public string $createdAt;
    #[CastWith(DateCaster::class)]
    public string $updatedAt;
}
