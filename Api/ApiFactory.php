<?php

namespace App\Support\Signicat\Api;

class ApiFactory
{
    public function dossierApi(): Dossiers
    {
        return app(Dossiers::class);
    }

    public function userDataApi(): UserData
    {
        return app(UserData::class);
    }

    public function captureApi(): Capture
    {
        return app(Capture::class);
    }

    public function processApi(): Process
    {
        return app(Process::class);
    }
}
