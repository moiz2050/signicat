<?php

namespace App\Support\Signicat\Facades;

use App\Support\Signicat\Services\TokenDriver;
use App\Support\Signicat\Services\TokenManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static TokenDriver getToken()
 * @method static TokenManager driver(string $name)
 * @see TokenManager
 */
class SignicatToken extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TokenManager::class;
    }
}
