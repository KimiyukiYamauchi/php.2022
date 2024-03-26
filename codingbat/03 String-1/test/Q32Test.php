<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q32.php';

class Q32Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testwithoutX2(string $str, string $expected)
    {
        $target = new Q32();
        
        $result = $target->withoutX2($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'withoutX2("xHi") → "Hi"' => ['xHi', 'Hi'],
            'withoutX2("Hxi") → "Hi"' => ['Hxi', 'Hi'],
            'withoutX2("Hi") → "Hi"' => ['Hi', 'Hi'],
            'withoutX2("xxHi") → "Hi"' => ['xxHi', 'Hi'],
            'withoutX2("Hix") → "Hix"' => ['Hix', 'Hix'],
            'withoutX2("xaxb") → "axb"' => ['xaxb', 'axb'],
            'withoutX2("xx") → ""' => ['xx', ''],
            'withoutX2("x") → ""' => ['x', ''],
            'withoutX2("") → ""' => ['', ''],
            'withoutX2("Hello") → "Hello"' => ['Hello', 'Hello'],
            'withoutX2("Hexllo") → "Hexllo"' => ['Hexllo', 'Hexllo'],
            'withoutX2("xHxllo") → "Hxllo"' => ['xHxllo', 'Hxllo'],
        ];
    }
}