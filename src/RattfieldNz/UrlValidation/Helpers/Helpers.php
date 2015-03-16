<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 21:41
 */

namespace RattfieldNz\UrlValidation\Helpers;


class Helpers {

    public static function arrayToString(array $array, $delimiter = ",")
    {
        if($array) {
            return implode($delimiter, $array);
        }
    }

    public static function replaceCharacters($string, $replace_from, $replace_to)
    {
        if($string && $replace_from && $replace_to)
        {
            return str_replace($replace_from, $replace_to, $string);
        }

    }

    public static function stringContains($string, $item_in_string)
    {
        if($string && $item_in_string)
        {
            if(strpos($string, $item_in_string) === true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
}