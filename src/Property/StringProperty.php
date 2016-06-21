<?php

namespace Shrink0r\Configr\Property;

use Shrink0r\Configr\Error;
use Shrink0r\Configr\Ok;

class StringProperty extends Property
{
    /**
     * Tells whether a given value is a valid string.
     *
     * @param mixed $value
     *
     * @return ResultInterface
     */
    public function validate($value)
    {
        return is_string($value) ? Ok::unit() : Error::unit([ Error::NON_STRING ]);
    }
}