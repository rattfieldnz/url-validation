<?php

namespace RattfieldNz\UrlValidation\ExternalSources\Jmathai\PhpMultiCurl;

class EpiCurlManager {

    private $key;
    private $epiCurl;
    function __construct($key)
    {
        $this->key = $key;
        $this->epiCurl = EpiCurl::getInstance();
    }
    function __get($name)
    {
        $responses = $this->epiCurl->getResult($this->key);
        return $responses[$name];
    }
    function __isset($name)
    {
        $val = self::__get($name);
        return empty($val);
    }
}