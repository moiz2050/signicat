<?php

namespace App\Support\Signicat\Api;

use App\Support\Signicat\Api\DataTransferObjects\Request\CreateDossierRequest;
use App\Support\Signicat\Api\DataTransferObjects\Response\CreateDossierResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\ErrorResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\UserDataResponse;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Dossiers extends Api
{
    /**
     * @throws UnknownProperties|GuzzleException
     */
    public function create(?CreateDossierRequest $createDossierRequest = null): CreateDossierResponse | ErrorResponse
    {
        $response = $this->client->post('assure/dossiers', [
            RequestOptions::JSON => $createDossierRequest?->toArray()
        ]);

        if ($response instanceof ErrorResponse) {
            return $response;
        }

        return new CreateDossierResponse($response);
    }

    /**
     * @throws GuzzleException|UnknownProperties
     */
    public function get(string $dossierId): UserDataResponse | ErrorResponse
    {
        $response = $this->client->get("assure/dossiers/{$dossierId}/userdata");

        if ($response instanceof ErrorResponse) {
            return $response;
        }

        return new UserDataResponse($response);
    }
}
