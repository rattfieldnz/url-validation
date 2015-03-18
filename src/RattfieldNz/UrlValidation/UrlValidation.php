<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 16:47
 */

namespace RattfieldNz\UrlValidation;
use RattfieldNz\UrlValidation\ExternalSources\Jmathai\PhpMultiCurl\EpiCurl;
use RattfieldNz\UrlValidation\HttpLibraries\StatusCodes;

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
        //Check if HTTP status code is less than 400 -
        // return true if it is, or else false.
        return (self::statusCode($url) < StatusCodes::HTTP_BAD_REQUEST) ? true : false;
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

    /**
     * This function obtains an HTTP status
     * code from a given URL.
     * @param $url
     * @return int
     */
    public static function statusCode($url)
    {
        //Instantiate the EpiCurl class to be used
        //with checking URL HTTP status code.
        $epi_curl_checker = EpiCurl::getInstance();

        // Add the given URL to the url checker.
        $url_check = $epi_curl_checker->addURL($url);

        //Return the HTTP status code.
        return $url_check->code;
    }
}