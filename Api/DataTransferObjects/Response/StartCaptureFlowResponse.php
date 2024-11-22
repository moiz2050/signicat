<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Response;

use Spatie\DataTransferObject\DataTransferObject;

class StartCaptureFlowResponse extends DataTransferObject
{
    public string $url;
}
