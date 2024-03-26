<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q9.php';

class Q9Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testcomboString(string $a, string $b, string $expected)
    {
        $target = new Q9();
        
        $result = $target->comboString($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'comboString("Hello", "hi") → "hiHellohi"' => ['Hello', 'hi', 'hiHellohi'],
            'comboString("hi", "Hello") → "hiHellohi"' => ['hi', 'Hello', 'hiHellohi'],
            'comboString("aaa", "b") → "baaab"' => ['aaa', 'b', 'baaab'],
            'comboString("b", "aaa") → "baaab"' => ['b', 'aaa', 'baaab'],
            'comboString("aaa", "") → "aaa"' => ['aaa', '', 'aaa'],
            'comboString("", "bb") → "bb"' => ['', 'bb', 'bb'],
            'comboString("aaa", "1234") → "aaa1234aaa"' => ['aaa', '1234', 'aaa1234aaa'],
            'comboString("aaa", "bb") → "bbaaabb"' => ['aaa', 'bb', 'bbaaabb'],
            'comboString("a", "bb") → "abba"' => ['a', 'bb', 'abba'],
            'comboString("bb", "a") → "abba"' => ['bb', 'a', 'abba'],
            'comboString("xyz", "ab") → "abxyzab"' => ['xyz', 'ab', 'abxyzab'],
        ];
    }
}