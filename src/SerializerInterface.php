<?php

/*
 * This file is part of JSON-API.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tobscure\JsonApi;

interface SerializerInterface
{
    /**
     * Get the type.
     *
     * @param mixed $model
     * @return string
     */
    public function getType($model);

    /**
     * Get the id.
     *
     * @param mixed $model
     * @return string
     */
    public function getId($model);

    /**
     * Get the attributes array.
     *
     * @param mixed $model
     * @param array|null $fields
     * @return array
     */
    public function getAttributes($model, array $fields = null);

    /**
     * Get a relationship builder for the given relationship.
     *
     * @param string $name
     * @return \Tobscure\JsonApi\Relationship\BuilderInterface|null
     */
    public function getRelationshipBuilder($name);
}
