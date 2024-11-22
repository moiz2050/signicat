<?php

namespace App\Support\Signicat\Api;

use App\Support\Signicat\Api\DataTransferObjects\Request\SetUserDataRequest;
use App\Support\Signicat\Api\DataTransferObjects\Response\ErrorResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\UserDataResponse;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class UserData extends Api
{
    /**
     * @throws GuzzleException
     */
    public function set(SetUserDataRequest $setUserDataRequest): ?ErrorResponse
    {
        return $this->client->post("assure/dossiers/{$setUserDataRequest->dossierId}/userdata", [
            RequestOptions::JSON => $setUserDataRequest->except('dossierId')->toArray()
        ]);
    }

    /**
     * @throws GuzzleException|UnknownProperties
     */
    public function get(string $dossierId): UserDataResponse | ErrorResponse
    {
        $response = $this->client->get("assure/dossiers/{$dossierId}/userdata");

        if (!$response instanceof ErrorResponse) {
            $response =  new UserDataResponse($response);
        }

        return $response;
    }

    /**
     * @throws GuzzleException
     */
    public function update(SetUserDataRequest $setUserDataRequest): ?ErrorResponse
    {
        return $this->client->put("assure/dossiers/{$setUserDataRequest->dossierId}/userdata", [
            RequestOptions::JSON => $setUserDataRequest->except('dossierId')->toArray()
        ]);
    }
}
