<?php
namespace criteo\api\marketingsolutions\preview;

use criteo\api\marketingsolutions\preview\Api\GatewayApi;
use criteo\api\marketingsolutions\preview\ClientCredentialsClient;
use criteo\api\marketingsolutions\preview\ApiException;
use criteo\api\marketingsolutions\preview\ObjectSerializer;
use criteo\api\marketingsolutions\preview\test\ExampleApplication;
use Jchook\AssertThrows\AssertThrows;
use PHPUnit\Framework\TestCase;

class GatewayApiTest extends TestCase
{
    use AssertThrows;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    /**
     * @var int
     */
    private $applicationId;

    function __construct()
    {
        parent::__construct();

        $this->clientId = $_SERVER["TEST_CLIENT_ID"];
        $this->clientSecret = $_SERVER["TEST_CLIENT_SECRET"];
        $this->applicationId = (int) $_SERVER["TEST_APPLICATION_ID"];
    }

    public function secretEnvironmentVariables()
    {
        $this->assertNotNull($this->clientId);
        $this->assertNotNull($this->clientSecret);
        $this->assertNotNull($this->applicationId);
    }

    public function testExampleWorks()
    {
        $example = new ExampleApplication();
        $example->CallTheApplicationEndpoint($this->clientId, $this->clientSecret);
    }

    public function testGetCurrentApplicationShouldSucceedWithValidToken()
    {
        // Arrange
        $api = new GatewayApi(new ClientCredentialsClient($this->clientId, $this->clientSecret));

        // Act
        $response = $api->getCurrentApplicationWithHttpInfo();

        // Assert
        $this->assertEquals(200, $response[1]);
        $this->assertEquals($this->applicationId, $response[0]->getData()->getAttributes()->getApplicationId());
    }

    public function testGetCurrentApplicationAsyncShouldSucceedWithValidToken()
    {
        // Arrange
        $api = new GatewayApi(new ClientCredentialsClient($this->clientId, $this->clientSecret));

        // Act
        $response = $api->getCurrentApplicationAsyncWithHttpInfo()->wait();

        // Assert
        $this->assertEquals(200, $response[1]);
        $this->assertEquals($this->applicationId, $response[0]->getData()->getAttributes()->getApplicationId());
    }

    public function testGetCurrentApplicationShouldFailWithoutToken()
    {
        $this->assertThrows(ApiException::class,
            function() {
                // Arrange
                $api = new GatewayApi();

                // Act
                $api->getCurrentApplicationWithHttpInfo();
            },
            function($exception) {
                $data = ObjectSerializer::deserialize(
                    $exception->getResponseBody(),
                    '\criteo\api\marketingsolutions\preview\Model\ApplicationSummaryModelResponse',
                    $exception->getResponseHeaders()
                );

                // Assert
                $this->assertEquals(401, $exception->getCode());
                $this->assertEquals('authentication', $data->getErrors()[0]->getType());
                $this->assertEquals('authentication-required', $data->getErrors()[0]->getCode());
            }
        );
    }

    public function testGetCurrentApplicationShouldFailWithInvalidCredentials(){
        $this->assertThrows(ApiException::class,
            function() {
                // Arrange
                $api = new GatewayApi(new ClientCredentialsClient("wrongClient", "wrongSecret12345678"));

                // Act
                $api->getCurrentApplicationWithHttpInfo();
            },
            function($exception) {
                $body = json_decode((string) $exception->getResponseBody());

                // Assert
                $this->assertEquals(401, $exception->getCode());
                $this->assertEquals('invalid_client', $body->error);
                $this->assertStringContainsString('client_id doesn\'t exist or the client_secret is invalid', $body->error_description);
            }
        );
    }
}
