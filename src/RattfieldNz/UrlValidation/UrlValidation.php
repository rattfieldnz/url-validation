<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 16:47
 */

namespace RattfieldNz\UrlValidation;

/**
 * Class UrlValidation
 * A class which holds functionality to
 * validate URLs.
 * @package RattfieldNz\UrlValidation
 */
class UrlValidation {

    /**
     * A function to see whether a given URL
     * exists or not.
     * @param $url
     * @return bool
     */
    public static function exists($url){

        return !checkdnsrr($url) ? true : false;
    }

    /**
     * A function to see if a URL matches
     * a given regular expression or not.
     * @param $url
     * @param $syntax_regex
     * @return bool
     */
    public static function matchesSyntax($url, $syntax_regex)
    {
        return preg_match($syntax_regex, $url) ? true : false;
    }
}