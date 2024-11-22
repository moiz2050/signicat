<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Request;

use App\Support\Signicat\Api\DataTransferObjects\UserDataDTO;
use Spatie\DataTransferObject\DataTransferObject;

class SetUserDataRequest extends DataTransferObject
{
    public string $dossierId;
    public UserDataDTO $userData;
}
