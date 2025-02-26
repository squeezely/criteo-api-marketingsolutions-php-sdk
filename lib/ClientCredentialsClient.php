<?php
namespace criteo\api\marketingsolutions\preview;

use criteo\api\marketingsolutions\preview\ApiException;
use criteo\api\marketingsolutions\preview\Configuration;
use criteo\api\marketingsolutions\preview\ObjectSerializer;
use criteo\api\marketingsolutions\preview\ClientCredentialsClient\Token;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;


define("AUTHORIZATION", 'Authorization');
define("GRANT_TYPE", 'client_credentials');

class ClientCredentialsClient implements ClientInterface
{
    /**
     * Delegate client that makes the call to the server
     * @var Client
     */
    private $client;

    /**
     * Token objects which contains the value and the expiration time
     * @var Token
     */
    private $token;
    private $clientId;
    private $clientSecret;
    private $oauthClient;

    /**
     * ClientCredentialsClient constructor.
     * @param string $clientId used to get a token against Authentication API
     * @param string $clientSecret used to get a token against Authentication API
     * @param ClientInterface|null $client
     */
    public function __construct($clientId, $clientSecret, $client = null)
    {
        $this->client = $client ?: new Client();
        $this->token = null;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->oauthClient = new OAuthClient($this->client);
    }

    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     * @throws \Exception if cannot refresh token
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        $requestWithUpdatedAuthorizationHeader = $this->refreshToken($request);
        return $this->client->send($requestWithUpdatedAuthorizationHeader, $options);
    }

    /**
     * Asynchronously send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @return PromiseInterface
     * @throws \Exception if cannot refresh token
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        $requestWithUpdatedAuthorizationHeader = $this->refreshToken($request);
        return $this->client->sendAsync($requestWithUpdatedAuthorizationHeader, $options);
    }

    /**
     * Create and send an HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well.
     *
     * @param string $method HTTP method.
     * @param string|UriInterface $uri URI object or string.
     * @param array $options Request options to apply.
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request($method, $uri, array $options = []): ResponseInterface
    {
        return $this->client->request($method, $uri, $options);
    }

    /**
     * Create and send an asynchronous HTTP request.
     *
     * Use an absolute path to override the base path of the client, or a
     * relative path to append to the base path of the client. The URL can
     * contain the query string as well. Use an array to provide a URL
     * template and additional variables to use in the URL template expansion.
     *
     * @param string $method HTTP method
     * @param string|UriInterface $uri URI object or string.
     * @param array $options Request options to apply.
     *
     * @return PromiseInterface
     */
    public function requestAsync($method, $uri, array $options = []): PromiseInterface
    {
        return $this->client->requestAsync($method, $uri, $options);
    }

    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
     */
    public function getConfig($option = null): mixed
    {
        return $this->client->getConfig($option);
    }

    /**
     * @return Token currently used to authenticate against the API
     */
    public function getToken(): Token
    {
        return $this->token;
    }

    /**
     * @param Token $token
     */
    public function setToken(Token $token): void
    {
        $this->token = $token;
    }

    private function refreshToken(RequestInterface $request): RequestInterface
    {
        if ($this->token == null || !$this->token->isValidEnough()) {
            try {
                $response = $this->oauthClient->getToken(GRANT_TYPE, $this->clientId, $this->clientSecret);
            } catch (ApiException $e) {
                throw new ApiException('Cannot refresh token automatically.', $e->getCode(), $e->getResponseHeaders(), $e->getResponseBody());
            }
            $this->token = new Token($response->access_token, $response->expires_in);
        }
        return $request
            ->withoutHeader(AUTHORIZATION)
            ->withAddedHeader(AUTHORIZATION, 'Bearer ' . $this->token->getValue());
    }
}

class OAuthClient{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * OAuthClient constructor.
     * @param ClientInterface|null $client
     * @param Configuration|null $config
     */
    public function __construct(
        $client = null, 
        $config = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
    }

    public function getToken($grant_type, $client_id, $client_secret, )
    {
        $request = $this->getTokenRequest($grant_type, $client_id, $client_secret);
        $response = $this->client->send($request, []);                   
        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        $content = json_decode((string) $response->getBody());
        
        list($response) = [
            $content,
            $response->getStatusCode(),
            $response->getHeaders()
        ];

        return $response;
    }

    /**
     * Create request to get token
     *
     * @param  string $grant_type (required)
     * @param  string $client_id (required)
     * @param  string $client_secret (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    private function getTokenRequest($grant_type, $client_id, $client_secret){
        $resourcePath = '/oauth2/token';
        $formParams = [];
        $httpBody = '';

        // form params
        $formParams['grant_type'] = ObjectSerializer::toFormValue($grant_type);
        $formParams['client_id'] = ObjectSerializer::toFormValue($client_id);
        $formParams['client_secret'] = ObjectSerializer::toFormValue($client_secret);

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'User-Agent' => $this->config->getUserAgent()
        ];

        $httpBody = ObjectSerializer::buildQuery($formParams);

        $operationHost = $this->config->getHost();
        return new Request(
            'POST',
            $operationHost . $resourcePath,
            $headers,
            $httpBody
        );

    }
}

namespace criteo\api\marketingsolutions\preview\ClientCredentialsClient;

use DateTime;

class Token
{
    /**
     * @var DateTime
     */
    private $expiresOn;
    private $value;

    public function __construct($value, $expiresIn)
    {
        $this->expiresOn = $this->computeExpiresOn($expiresIn);
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function computeExpiresOn($expiresIn): DateTime
    {
        $now = new DateTime();
        return $now->modify('+' . $expiresIn . ' second');
    }

    public function isValidEnough(): bool
    {
        $now = new DateTime();
        return $this->expiresOn > $now->modify('+15 second');
    }
}
