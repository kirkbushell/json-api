<?php

/*
 * This file is part of JSON-API.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tobscure\JsonApi\Exception;

interface JsonApiSerializableInterface
{
    /**
     * Return the HTTP status code to be used for this exception.
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * Return an array of errors, formatted as JSON-API error objects.
     *
     * @see http://jsonapi.org/format/#error-objects
     * @return array
     */
    public function getErrors();
}
