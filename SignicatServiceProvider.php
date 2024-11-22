<?php

namespace App\Support\Signicat;

use App\Support\Signicat\Services\BaseClient;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SignicatServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SignicatClient::class, fn () => new SignicatClient($this->getGuzzleClient()));
    }

    public function getGuzzleClient(): BaseClient
    {
        return new BaseClient();
    }

    public function provides(): array
    {
        return [SignicatClient::class];
    }
}
