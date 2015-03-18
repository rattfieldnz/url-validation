<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 21:41
 */

namespace RattfieldNz\UrlValidation\Helpers;

/**
 * Class Helpers
 * This class holds useful customized functions
 * which are used in the url validation package.
 * @package RattfieldNz\UrlValidation\Helpers
 */
class Helpers {

    /**
     * This function converts an array to a string,
     * given an array and a delimiter.
     * @param array $array
     * @param string $delimiter
     * @return string
     */
    public static function arrayToString(array $array, $delimiter = ",")
    {
        if($array) {
            return implode($delimiter, $array);
        }
    }

    /**
     * This function replaces characters in a string
     * with another specified string;
     * @param $string
     * @param $replace_from
     * @param $replace_to
     * @return mixed
     */
    public static function replaceCharacters($string, $replace_from, $replace_to)
    {
        if($string && $replace_from && $replace_to)
        {
            return str_replace($replace_from, $replace_to, $string);
        }

    }
}