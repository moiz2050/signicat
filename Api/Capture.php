<?php

namespace App\Support\Signicat\Api;

use App\Support\Signicat\Api\DataTransferObjects\Request\ConfigurationRequest;
use App\Support\Signicat\Api\DataTransferObjects\Request\StartCaptureFlowRequest;
use App\Support\Signicat\Api\DataTransferObjects\Response\ConfigurationResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\ErrorResponse;
use App\Support\Signicat\Api\DataTransferObjects\Response\StartCaptureFlowResponse;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class Capture extends Api
{
    public const TEST_NOTIFY_PROXY_URL = "https://labs.signicat.com/proxy?target=:notificationUrl";

    /**
     * @throws UnknownProperties | GuzzleException
     */
    public function startFlow(StartCaptureFlowRequest $captureFlowRequest): StartCaptureFlowResponse | ErrorResponse
    {
        $response = $this->client->post("assure/dossiers/{$captureFlowRequest->dossierId}/capture", [
            RequestOptions::JSON => $captureFlowRequest->except('dossierId')->toArray()
        ]);

        if (!$response instanceof ErrorResponse) {
            $response =  new StartCaptureFlowResponse($response);
        }

        return $response;
    }

    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function createConfiguration(
        ConfigurationRequest $createConfigurationRequest
    ): ConfigurationResponse | ErrorResponse {
        $response = $this->client->post("assure/capture/configurations/{$createConfigurationRequest->id}", [
            RequestOptions::JSON => $createConfigurationRequest->except('id')->toArray()
        ]);

        if (!$response instanceof ErrorResponse) {
            $response =  new ConfigurationResponse($response);
        }

        return $response;
    }

    /**
     * @throws UnknownProperties
     * @throws GuzzleException
     */
    public function updateConfiguration(
        ConfigurationRequest $createConfigurationRequest
    ): ConfigurationResponse | ErrorResponse {
        $response = $this->client->put("assure/capture/configurations/{$createConfigurationRequest->id}", [
            RequestOptions::JSON => $createConfigurationRequest->except('id')->toArray()
        ]);

        if (!$response instanceof ErrorResponse) {
            $response =  new ConfigurationResponse($response);
        }

        return $response;
    }

    /**
     * @param string $configurationId
     * @return ConfigurationResponse|ErrorResponse
     * @throws GuzzleException|UnknownProperties
     */
    public function getConfiguration(string $configurationId): ConfigurationResponse | ErrorResponse
    {
        $response = $this->client->get("assure/capture/configurations/{$configurationId}");

        if (!$response instanceof ErrorResponse) {
            $response =  new ConfigurationResponse($response);
        }

        return $response;
    }
}
