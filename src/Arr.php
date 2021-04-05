<?php

namespace KzNumberToWords;

use ArrayAccess;

/**
 * Class Arr
 */
final class Arr
{
    /**
     * @param array $array
     * @param $key
     * @param string $default
     *
     * @return array|mixed|string
     */
    public static function get(array $array, $key, $default = '')
    {
        if (!self::accessible($array)) {
            return $default;
        }

        if (is_null($key)) {
            return $array;
        }

        if (self::exists($array, $key)) {
            return $array[ $key ];
        }

        return $default;
    }

    /**
     * @param $value
     *
     * @return bool
     */
    public static function accessible($value): bool
    {
        return is_array($value);
    }

    /**
     * @param $array
     * @param $key
     *
     * @return bool
     */
    public static function exists($array, $key): bool
    {
        if ($array instanceof ArrayAccess) {
            return $array->offsetExists($key);
        }

        return array_key_exists($key, $array);
    }
}
