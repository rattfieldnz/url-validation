<?php
/**
 * Created by PhpStorm.
 * User: robattfield
 * Date: 19-Mar-2015
 * Time: 00:04
 */

use RattfieldNz\UrlValidation\Helpers\Helpers;

class HelpersTest extends Orchestra\Testbench\TestCase {

    public function testArrayToStringOnEmptyArray()
    {
        $this->generateTestArrayToString([], "");
    }

    public function testArrayToStringOnArrayWithOneItem()
    {
        $this->generateTestArrayToString([1], "1");
    }

    public function testArrayToStringOnArrayWithMultipleValues()
    {
        $this->generateTestArrayToString([1,'two', 3, 'four', 5], "1,two,3,four,5");
    }

    public function testReplaceCharactersOnString()
    {
        //Replace empty string with empty string
        $this->generateTestReplaceChars("", "", "", "");

        //Replace empty string with full string
        $this->generateTestReplaceChars("", "", "", "hi");

        //Replace character in full string with another character
        $this->generateTestReplaceChars("bobby", "bxbby", "o", "x");

        //Replace sub-string in full string with another sub-string
        $this->generateTestReplaceChars("cats and dogs", "cats and birds", 'dogs', 'birds');

    }

    private function generateTestReplaceChars($string, $new_string, $original_chars, $new_chars)
    {
        $expected_result = $new_string;
        $result = Helpers::replaceCharacters($string, $original_chars, $new_chars);
        $this->assertEquals($expected_result, $result);
    }

    private function generateTestArrayToString(array $original_array, $exp_result, $delimiter = ",")
    {
        $result = Helpers::arrayToString($original_array);

        $this->assertEquals($exp_result, $result);

    }
}
