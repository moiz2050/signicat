<?php

namespace App\Support\Signicat;

use App\Support\Signicat\Api\DataTransferObjects\Response\ErrorResponse;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;

class SignicatClient
{
    public string $token;

    public function __construct(public Client $client)
    {
    }

    /**
     * @throws GuzzleException
     */
    public function get(string|UriInterface $url, array $options = []): array|ErrorResponse
    {
        try {
            $response = $this->client->get($url, $options);
        } catch (ClientException $e) {
            return new ErrorResponse($this->getBody($e->getResponse()));
        }

        return $this->getBody($response);
    }

    /**
     * @throws GuzzleException
     */
    public function post(string|UriInterface $url, array $options = [])
    {
        try {
            $response = $this->client->post($url, $options);
        } catch (ClientException $e) {
            return new ErrorResponse($this->getBody($e->getResponse()));
        }

        return $this->getBody($response);
    }
    /**
     * @throws GuzzleException
     */
    public function put(string|UriInterface $url, array $options = [])
    {
        try {
            $response = $this->client->put($url, $options);
        } catch (ClientException $e) {
            return new ErrorResponse($this->getBody($e->getResponse()));
        }

        return $this->getBody($response);
    }

    public function getBody(ResponseInterface $response)
    {
        return json_decode($response->getBody(), true, 512, JSON_BIGINT_AS_STRING);
    }

    /**
     * @param string|UriInterface $url
     * @param array $options
     * @return StreamInterface|ErrorResponse
     * @throws GuzzleException
     * @throws UnknownProperties
     */
    public function getRaw(string|UriInterface $url, array $options = []): StreamInterface | ErrorResponse
    {
        try {
            $response = $this->client->get($url, $options);
        } catch (ClientException $e) {
            return new ErrorResponse($this->getBody($e->getResponse()));
        }

        return $response->getBody();
    }
}
