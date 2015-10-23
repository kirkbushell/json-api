<?php
namespace Tobscure\JsonApi\Exception\Handler;

use Exception;
use Flarum\Core;

class FallbackExceptionHandler implements ExceptionHandler
{
    /**
     * @var bool
     */
    private $debug;

    /**
     * @param bool $debug
     */
    public function __construct($debug)
    {
        $this->debug = $debug;
    }
    /**
     * If the exception handler is able to format a response for the provided exception,
     * then the implementation should return true.
     *
     * @param Exception $e
     * @return boolean
     */
    public function manages(Exception $e)
    {
        return true;
    }

    /**
     * Handle the provided exception.
     *
     * @param Exception $e
     * @return mixed
     */
    public function handle(Exception $e)
    {
        $status = 500;
        $error = $this->constructError($e, $status);

        return new ResponseBag($status, [$error]);
    }

    /**
     * @param Exception $e
     * @param $status
     * @return array
     */
    private function constructError(Exception $e, $status)
    {
        $error = ['code' => $status, 'title' => 'Internal Server Error'];

        if ($this->debug) {
            $error['detail'] = (string) $e;
        }

        return $error;
    }
}
