<?php

namespace App\Support\Signicat\Api;

use App\Support\Signicat\SignicatClient;

abstract class Api
{
    public function __construct(public SignicatClient $client)
    {
    }
}
