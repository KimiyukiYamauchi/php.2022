<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q12.php';

class Q12Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfront3(string $str, string $expected)
    {
        $target = new Q12();
        
        $result = $target->front3($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'front3("Java") → "JavJavJav"' => ['Java', 'JavJavJav'],
            'front3("Chocolate") → "ChoChoCho"	' => ['Chocolate', 'ChoChoCho'],
            'front3("abc") → "abcabcabc"' => ['abc', 'abcabcabc'],
            'front3("abcXYZ") → "abcabcabc"' => ['abcXYZ', 'abcabcabc'],
            'front3("ab") → "ababab"' => ['ab', 'ababab'],
            'front3("a") → "aaa"' => ['a', 'aaa'],
            'front3("") → ""' => ['', ''],
        ];
    }
}