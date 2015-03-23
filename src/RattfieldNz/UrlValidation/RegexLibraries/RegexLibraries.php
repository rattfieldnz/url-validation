<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 21:32
 */

namespace RattfieldNz\UrlValidation\RegexLibraries;
use RattfieldNz\UrlValidation\UrlComponents\UrlComponents;

/**
 * Class RegexLibraries
 * This class contains defined regular expressions
 * (derived from external sources), which are used
 * to validate the syntax of a URL.
 * @package RattfieldNz\UrlValidation\RegexLibraries
 */
class RegexLibraries {

    /**
     * This library, called 'Spoon Library', has been adapted from
     * https://mathiasbynens.be/demo/url-regex.
     * @uses UrlComponents::protocolsToString
     * @uses UrlComponents::extensionsToString
     * @return string
     */
    public static function spoon()
    {
        return '/(((' . UrlComponents::protocolsToString() . '):\/{2})+(([0-9a-z_-]+\.)+(' . UrlComponents::extensionsToString() . ')(:[0-9]+)?((\/([~0-9a-zA-Z\#\+\%@\.\/_-]+))?(\?[0-9a-zA-Z\+\%@\/&\[\];=_-]+)?)?))\b/imuS';
    }
}