<?php
use RattfieldNz\UrlValidation\HttpLibraries\StatusCodes;

/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 21-Mar-2015
 * Time: 19:45
 */

class StatusCodesTest extends Orchestra\Testbench\TestCase {

    public function testGetHttpStatusMessage()
    {
        //Test with valid HTTP status code
        $this->generateHttpStatusMessageTest(200, 'OK');

        //Test with invalid HTTP status code
        $this->generateHttpStatusMessageTest(999, '');
    }

    public function testGenerateHttpHeader()
    {
        //Test with valid HTTP status code
        $this->generateHttpHeaderTest(200, "HTTP/1.1 OK");

        //Test with invalid HTTP status code
        $this->generateHttpHeaderTest(999, "");
    }

    public function testIsValidStatusCode()
    {
        // Test valid HTTP status code
        $this->generateIsValidStatusCodeTest(200, true);

        // Test invalid HTTP status code
        $this->generateIsValidStatusCodeTest(999, false);
    }

    private function generateHttpStatusMessageTest($http_status_code, $exp_result)
    {
        $result = StatusCodes::getHttpStatusMessage($http_status_code);
        $this->assertEquals($exp_result, $result);
    }

    private function generateHttpHeaderTest($http_status_code, $exp_result)
    {
        $result = StatusCodes::generateHttpHeader($http_status_code);
        $this->assertEquals($exp_result, $result);
    }

    private function generateIsValidStatusCodeTest($http_status_code, $exp_result)
    {
        $result = StatusCodes::isValidStatusCode($http_status_code);
        $this->assertEquals($exp_result, $result);
    }
}
