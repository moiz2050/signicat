<?php

namespace App\Support\Signicat\Services;

use Illuminate\Support\Manager;

class TokenManager extends Manager implements Factory
{
    public $drivers = [
        'file'
    ];

    public function getDefaultDriver()
    {
        return $this->config->get('signicat.tokenDriver.default', 'file');
    }

    public function createFileDriver(): TokenDriver
    {
        return (new FileDriver(new OAuthService(), storage_path('token.txt')));
    }
}
