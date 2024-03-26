<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q31.php';

class Q31Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testwithoutX(string $str, string $expected)
    {
        $target = new Q31();
        
        $result = $target->withoutX($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'withoutX("xHix") → "Hi"' => ['xHix', 'Hi'],
            'withoutX("xHi") → "Hi"' => ['xHi', 'Hi'],
            'withoutX("Hxix") → "Hxi"' => ['Hxix', 'Hxi'],
            'withoutX("Hi") → "Hi"' => ['Hi', 'Hi'],
            'withoutX("xxHi") → "xHi"' => ['xxHi', 'xHi'],
            'withoutX("Hix") → "Hi"' => ['Hix', 'Hi'],
            'withoutX("xaxbx") → "axb"' => ['xaxbx', 'axb'],
            'withoutX("xx") → ""' => ['xx', ''],
            'withoutX("x") → ""' => ['x', ''],
            'withoutX("") → ""' => ['', ''],
            'withoutX("Hello") → "Hello"' => ['Hello', 'Hello'],
            'withoutX("Hexllo") → "Hexllo"' => ['Hexllo', 'Hexllo'],
        ];
    }
}