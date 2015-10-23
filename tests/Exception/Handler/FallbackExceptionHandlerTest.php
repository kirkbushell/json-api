<?php
namespace Tobscure\Tests\Exception\Handler;

use Exception;
use Tobscure\JsonApi\Exception\Handler\FallbackExceptionHandler;
use Tobscure\JsonApi\Exception\Handler\ResponseBag;

class FallbackExceptionHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testHandlerCanManageExceptions()
    {
        $handler = new FallbackExceptionHandler(false);

        $this->assertTrue($handler->manages(new Exception));
    }

    public function testErrorHandlingWithoutDebugMode()
    {
        $handler = new FallbackExceptionHandler(false);
        $response = $handler->handle(new Exception);

        $this->assertInstanceOf(ResponseBag::class, $response);
        $this->assertEquals(500, $response->getStatus());
    }
}
