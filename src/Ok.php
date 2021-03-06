<?php

namespace Shrink0r\PhpSchema;

/**
 * Indicates the successful execution of an operation; may wrap return data.
 */
class Ok implements ResultInterface
{
    /**
     *  @var array $data
     */
    private $data;

    /**
     * Creates a new Ok instance, which holds the given return data.
     *
     * @param mixed $data
     *
     * @return Ok
     */
    public static function unit($data = null)
    {
        $class = static::class;

        return new $class($data);
    }

    /**
     * @param mixed $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Unwrap the return data, held by an Ok instance.
     *
     * @return mixed
     */
    public function unwrap()
    {
        return $this->data;
    }
}
