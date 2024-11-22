<?php

namespace App\Support\Signicat\Api\DataTransferObjects;

use App\Support\Signicat\Api\DataTransferObjects\Validators\DateFormat;
use Spatie\DataTransferObject\DataTransferObject;

class UserDataDTO extends DataTransferObject
{
    public string $firstName;
    public string $lastName;
    public ?string $gender;
    public ?string $nationality;
    #[DateFormat('Y-m-d')]
    public string $dateOfBirth;
    public ?string $personalIdentificationNumber;
    public ?string $placeOfBirth;
    public ?string $mobile;
    public ?string $email;
    public ?AddressDTO $address;
}
