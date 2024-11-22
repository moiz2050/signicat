<?php

namespace App\Support\Signicat\Facades;

use App\Support\Signicat\Api\ApiFactory;
use App\Support\Signicat\Api\Capture;
use App\Support\Signicat\Api\Dossiers;
use App\Support\Signicat\Api\Process;
use App\Support\Signicat\Api\UserData;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Dossiers dossierApi()
 * @method static UserData userDataApi()
 * @method static Capture captureApi()
 * @method static Process processApi()
 *
 * @see ApiFactory
 */
class Signicat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ApiFactory::class;
    }
}
