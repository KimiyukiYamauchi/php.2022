<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q11.php';

class Q11Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfrontBack(string $str, string $expected)
    {
        $target = new Q11();
        
        $result = $target->frontBack($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'frontBack("code") → "eodc"' => ['code', 'eodc'],
            'frontBack("a") → "a"' => ['a', 'a'],
            'frontBack("ab") → "ba"' => ['ab', 'ba'],
            'frontBack("abc") → "cba"' => ['abc', 'cba'],
            'frontBack("") → ""' => ['', ''],
            'frontBack("Chocolate") → "ehocolatC"	' => ['Chocolate', 'ehocolatC'],
            'frontBack("aavJ") → "Java"' => ['aavJ', 'Java'],
            'frontBack("hello") → "oellh"' => ['hello', 'oellh'],
        ];
    }
}