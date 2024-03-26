<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q3.php';

class Q3Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testcountXX(string $str, int $expected)
    {
        $target = new Q3();
        
        $result = $target->countXX($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'countXX("abcxx") → 1' => ['abcxx', 1],
            'countXX("xxx") → 2' => ['xxx', 2],
            'countXX("xxxx") → 3' => ['xxxx', 3],
            'countXX("abc") → 0' => ['abc', 0],
            'countXX("Hello there") → 0' => ['Hello there', 0],
            'countXX("Hexxo thxxe") → 2' => ['Hexxo thxxe', 2],
            'countXX("") → 0' => ['', 0],
            'countXX("Kittens") → 0' => ['Kittens', 0],
            'countXX("Kittensxxx") → 2' => ['Kittensxxx', 2],
        ];
    }
}