<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use App\Support\Signicat\Api\DataTransferObjects\Validators\EnumValidator;
use App\Support\Signicat\Enums\ProcessTypes;
use App\Support\Signicat\Enums\Providers;
use App\Support\Signicat\Enums\Redacts;
use Spatie\DataTransferObject\DataTransferObject;

class DocumentInstructionsItemsDTO extends DataTransferObject
{
    public ?string $image;
    public ?string $icon;
    public ?string $title;
    public ?string $description;
}
