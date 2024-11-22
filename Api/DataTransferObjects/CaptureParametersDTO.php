<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class CaptureParametersDTO extends DataTransferObject
{
    public ?string $uiProfile;
    public ?string $uiLanguage;
    public ?string $smsSender;
    public ?string $smsMessage;
    public ?string $defaultCountry;
}
