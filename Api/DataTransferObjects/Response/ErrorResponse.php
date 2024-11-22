<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Response;

use Spatie\DataTransferObject\DataTransferObject;

class ErrorResponse extends DataTransferObject
{
    public ?string $instance;
    public ?string $method;
    public ?int $status;
    public ?string $title;
    public ?string $detail;
}
