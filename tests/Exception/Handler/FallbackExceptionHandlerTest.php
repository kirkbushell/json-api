<?php
namespace Tobscure\Tests\Exception\Handler;

use Exception;
use Tobscure\JsonApi\Exception\Handler\FallbackExceptionHandler;

class FallbackExceptionHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testHandlerCanManageExceptions()
    {
        $handler = new FallbackExceptionHandler(false);

        $this->assertTrue($handler->manages(new Exception));
    }
}
