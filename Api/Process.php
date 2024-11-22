<?php

namespace App\Support\Signicat\Api;

use App\Support\Signicat\Api\DataTransferObjects\Response\ErrorResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\GetProcessResponse;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\StreamInterface;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Process extends Api
{
    /**
     * @throws GuzzleException|UnknownProperties
     */
    public function get(string $dossierId, string $processId): GetProcessResponse | ErrorResponse
    {
        $response = $this->client->get("assure/dossiers/{$dossierId}/processes/{$processId}");

        if ($response instanceof ErrorResponse) {
            return $response;
        }

        return new GetProcessResponse($response);
    }

    /**
     * @param string $dossierId
     * @param string $processId
     * @return ErrorResponse|StreamInterface
     * @throws GuzzleException
     * @throws UnknownProperties
     */
    public function download(string $dossierId, string $processId): ErrorResponse | StreamInterface
    {
        $response = $this->client->getRaw("assure/dossiers/{$dossierId}/processes/{$processId}/download");

        if ($response instanceof ErrorResponse) {
            return $response;
        }

        return $response;
    }
}
