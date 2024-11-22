<?php

namespace App\Support\Signicat\Api\DataTransferObjects\Response;

use App\Support\Signicat\Api\DataTransferObjects\UserDataDTO;
use Spatie\DataTransferObject\DataTransferObject;

class UserDataResponse extends DataTransferObject
{
    public string $dossierId;
    public UserDataDTO $userData;
    public string $createdAt;
    public string $updatedAt;
}
