<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q2.php';

class Q2Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfrontTimes(string $str, int $n, string $expected)
    {
        $target = new Q2();
        
        $result = $target->frontTimes($str, $n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'frontTimes("Chocolate", 2) → "ChoCho"' => ['Chocolate', 2, 'ChoCho'],
            'frontTimes("Chocolate", 3) → "ChoChoCho"	' => ['Chocolate', 3, 'ChoChoCho'],
            'frontTimes("Abc", 3) → "AbcAbcAbc"' => ['Abc', 3, 'AbcAbcAbc'],
            'frontTimes("Ab", 4) → "AbAbAbAb"' => ['Ab', 4, 'AbAbAbAb'],
            'frontTimes("A", 4) → "AAAA"' => ['A', 4, 'AAAA'],
            'frontTimes("", 4) → ""' => ['', 4, ''],
            'frontTimes("Abc", 0) → ""' => ['Abc', 0, ''],
        ];
    }
}