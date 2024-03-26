<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q12.php';

class Q12Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringX(string $str, string $expected)
    {
        $target = new Q12();
        
        $result = $target->stringX($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringX("xxHxix") → "xHix"' => ["xxHxix", "xHix"],
            'stringX("abxxxcd") → "abcd"' => ["abxxxcd", "abcd"],
            'stringX("xabxxxcdx") → "xabcdx"' => ["xabxxxcdx", "xabcdx"],
            'stringX("xKittenx") → "xKittenx"' => ["xKittenx", "xKittenx"],
            'stringX("Hello") → "Hello"' => ["Hello", "Hello"],
            'stringX("xx") → "xx"' => ["xx", "xx"],
            'stringX("x") → "x"' => ["x", "x"],
            'stringX("") → ""' => ["", ""],
        ];
    }
}