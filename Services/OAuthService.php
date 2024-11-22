<?php

namespace App\Support\Signicat\Services;

use App\Support\Signicat\Enums\OAuthScopes;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class OAuthService
{
    /**
     * @throws RequestException
     */
    public function requestToken(): string
    {
        return Http::withBasicAuth(config('signicat.client_id'), config('signicat.client_secret'))
            ->baseUrl(config('signicat.base_url'))->asForm()->post('oidc/token', [
                'scope' => sprintf(
                    '%s %s',
                    OAuthScopes::CLIENT_ASSURE_API->value,
                    OAuthScopes::CLIENT_CAPTURE_API->value
                ),
                'grant_type' => 'client_credentials'
            ])->throw()->object()->access_token;
    }
}
