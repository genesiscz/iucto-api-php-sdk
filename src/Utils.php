<?php

namespace IUcto;

use DateTime;

/**
 * Description of ArrayUtils
 *
 * @author iucto.cz
 */
class Utils
{

    public static function getValueOrNull(array $array, $key)
    {
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }
        return null;
    }

    /**
     * @param $input
     * @return bool|DateTime
     */
    public static function getDateTimeFrom($input)
    {
        if ($input instanceof DateTime) {
            return $input;
        }
        return DateTime::createFromFormat("Y-m-d", $input);
    }

    /**
     * @param $input
     * @return string
     */
    public static function getTimestampFrom($input)
    {
        if ($input instanceof DateTime) {
            return $input->format("U");
        }
        return $input;
    }

}
