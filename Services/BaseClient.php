<?php

namespace App\Support\Signicat\Services;

use App\Support\Signicat\Facades\SignicatToken;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class BaseClient extends Client
{
    public function __construct()
    {
        $token = SignicatToken::getToken();

        $config = [
            'base_uri' => config('signicat.base_url'),
            RequestOptions::HEADERS  => [
                'Authorization' => "Bearer {$token}"
            ]
        ];

        parent::__construct($config);
    }
}
