<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 16-Mar-2015
 * Time: 16:47
 */

namespace RattfieldNz\UrlValidation;

use RattfieldNz\UrlValidation\RegexLibraries;
use Illuminate\Support\Facades\Config;

class UrlValidation {

    public static function hi(){
        return "hello!";
    }

    /**
     * A function to see whether a given URL
     * exists or not.
     * @param $url
     * @return bool
     */
    public static function exists($url){
        if(!checkdnsrr($url))
        {
            return false;
        }
        return true;
    }

    public static function hasCorrectSyntax()
    {

    }
}