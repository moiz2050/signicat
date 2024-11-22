<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use Spatie\DataTransferObject\DataTransferObject;

class AddressDTO extends DataTransferObject
{
    public ?string $formatted;
    public ?string $streetAddress;
    public ?string $houseNumber;
    public ?string $locality;
    public ?string $postalCode;
    public ?string $country;
}
