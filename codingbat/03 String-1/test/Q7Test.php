<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q7.php';

class Q7Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfirstHalf(string $str, string $expected)
    {
        $target = new Q7();
        
        $result = $target->firstHalf($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'firstHalf("WooHoo") → "Woo"' => ['WooHoo', 'Woo'],
            'firstHalf("HelloThere") → "Hello"' => ['HelloThere', 'Hello'],
            'firstHalf("abcdef") → "abc"' => ['abcdef', 'abc'],
            'firstHalf("ab") → "a"' => ['ab', 'a'],
            'firstHalf("") → ""' => ['', ''],
            'firstHalf("0123456789") → "01234"' => ['0123456789', '01234'],
            'firstHalf("kitten") → "kit"' => ['kitten', 'kit'],
        ];
    }
}