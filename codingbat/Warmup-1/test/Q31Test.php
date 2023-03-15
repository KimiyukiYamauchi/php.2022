<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q31.php';

class Q31Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testeveryNth(string $str, int $n, string $expected)
    {
        $target = new Q31();
        
        $result = $target->everyNth($str, $n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'everyNth("Miracle", 2) → "Mrce"' => ['Miracle', 2, 'Mrce'],
            'everyNth("abcdefg", 2) → "aceg"' => ['abcdefg', 2, 'aceg'],
            'everyNth("abcdefg", 3) → "adg"' => ['abcdefg', 3, 'adg'],
            'everyNth("Chocolate", 3) → "Cca"' => ['Chocolate', 3, 'Cca'],
            'everyNth("Chocolates", 3) → "Ccas"' => ['Chocolates', 3, 'Ccas'],
            'everyNth("Chocolates", 4) → "Coe"' => ['Chocolates', 4, 'Coe'],
            'everyNth("Chocolates", 100) → "C"' => ['Chocolates', 100, 'C'],
        ];
    }
}