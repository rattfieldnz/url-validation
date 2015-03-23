<?php
use RattfieldNz\UrlValidation\RegexLibraries\RegexLibraries;
use RattfieldNz\UrlValidation\UrlValidation;

/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 23-Mar-2015
 * Time: 16:56
 */

class UrlValidationTest extends Orchestra\Testbench\TestCase {

    public function testUrlExists()
    {
        // A web url known to produce an HTTP 200 code.
        $this->generateUrlExistsTest("http://www.robertattfield.com", true);

        // A web url known to produce an HTTP 301 code.
        $this->generateUrlExistsTest("http://btcrotator.robertattfield.com", true);

        // A web url known to produce an HTTP 404 code.
        $this->generateUrlExistsTest("http://www.robertattfield.com/hgfjhgfdhgdjgdgdfgfdgs", false);
    }

    public function testGetUrlStatusCode()
    {
        $this->generateGetUrlStatusCodeTest("http://www.robertattfield.com", 200);
        $this->generateGetUrlStatusCodeTest("http://btcrotator.robertattfield.com", 301);
        $this->generateGetUrlStatusCodeTest("http://www.robertattfield.com/xyz", 404);
    }

    public function testUrlMatchesSyntax()
    {
        //Tests for Spoon library
        $this->generateUrlMatchesSyntaxTest("http://www.robertattfield.com", RegexLibraries::spoon(), true);
        $this->generateUrlMatchesSyntaxTest("http://userid@example.com", RegexLibraries::spoon(), false);
        $this->generateUrlMatchesSyntaxTest("https://www.example.com/foo/?bar=baz&inga=42&quux", RegexLibraries::spoon(), true);
        $this->generateUrlMatchesSyntaxTest("http://223.255.255.254", RegexLibraries::spoon(), false);
        $this->generateUrlMatchesSyntaxTest("http://a.b-c.de", RegexLibraries::spoon(), true);
        $this->generateUrlMatchesSyntaxTest("http://", RegexLibraries::spoon(), false);
        $this->generateUrlMatchesSyntaxTest("http://foo.com/blah_blah_(wikipedia)_(again)", RegexLibraries::spoon(), true);
        $this->generateUrlMatchesSyntaxTest("http://مثال.إختبار", RegexLibraries::spoon(), false);
        $this->generateUrlMatchesSyntaxTest("http://foo.com/(something)?after=parens", RegexLibraries::spoon(), true);
        $this->generateUrlMatchesSyntaxTest("http://-error-.invalid/", RegexLibraries::spoon(), false);

    }

    private function generateUrlExistsTest($url, $exp_result)
    {
        $result = URLValidation::urlExists($url);
        $this->assertEquals($exp_result, $result);
    }

    private function generateGetUrlStatusCodeTest($url, $exp_result)
    {
        $result = URLValidation::getUrlStatusCode($url);
        $this->assertEquals($exp_result, $result);
    }

    private function generateUrlMatchesSyntaxTest($url, $regex, $exp_result)
    {
        $result = UrlValidation::urlMatchesSyntax($url, $regex);
        $this->assertEquals($exp_result, $result);
    }
}
