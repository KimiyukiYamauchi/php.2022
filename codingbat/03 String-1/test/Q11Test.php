<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q11.php';

class Q11Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testleft2(string $str, string $expected)
    {
        $target = new Q11();
        
        $result = $target->left2($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'left2("Hello") → "lloHe"' => ["Hello", "lloHe"],
            'left2("java") → "vaja"' => ["java", "vaja"],
            'left2("Hi") → "Hi"' => ["Hi", "Hi"],
            'left2("code") → "deco"' => ["code", "deco"],
            'left2("cat") → "tca"' => ["cat", "tca"],
            'left2("12345") → "34512"' => ["12345", "34512"],
            'left2("Chocolate") → "ocolateCh"' => ["Chocolate", "ocolateCh"],
            'left2("bricks") → "icksbr"' => ["bricks", "icksbr"],
        ];
    }
}