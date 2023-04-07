<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q2.php';

class Q2Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakeAbba(string $a, string $b, string $expected)
    {
        $target = new Q2();
        
        $result = $target->makeAbba($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeAbba("Hi", "Bye") → "HiByeByeHi"' => ['Hi', 'Bye', 'HiByeByeHi'],
            'makeAbba("Yo", "Alice") → "YoAliceAliceYo"' => ['Yo', 'Alice', 'YoAliceAliceYo'],
            'makeAbba("What", "Up") → "WhatUpUpWhat"' => ['What', 'Up', 'WhatUpUpWhat'],
            'makeAbba("aaa", "bbb") → "aaabbbbbbaaa"' => ['aaa', 'bbb', 'aaabbbbbbaaa'],
            'makeAbba("x", "") → "xx"' => ['x', '', 'xx'],
            'makeAbba("", "y") → "yy"' => ['', 'y', 'yy'],
            'makeAbba("Bo", "Ya") → "BoYaYaBo"' => ['Bo', 'Ya', 'BoYaYaBo'],
            'makeAbba("Ya", "Ya") → "YaYaYaYa"' => ['Ya', 'Ya', 'YaYaYaYa'],
        ];
    }
}