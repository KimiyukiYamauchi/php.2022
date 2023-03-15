<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q10.php';

class Q10Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmissingChar(string $str, int $n, string $expected)
    {
        $target = new Q10();
        
        $result = $target->missingChar($str, $n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'missingChar("kitten", 1) → "ktten"' => ['kitten', 1, 'ktten'],
            'missingChar("kitten", 0) → "itten"' => ['kitten', 0, 'itten'],
            'missingChar("kitten", 4) → "kittn"' => ['kitten', 4, 'kittn'],
            'missingChar("Hi", 0) → "i"' => ['Hi', 0, 'i'],
            'missingChar("Hi", 1) → "H"' => ['Hi', 1, 'H'],
            'missingChar("code", 0) → "ode"' => ['code', 0, 'ode'],
            'missingChar("code", 1) → "cde"' => ['code', 1, 'cde'],
            'missingChar("code", 2) → "coe"' => ['code', 2, 'coe'],
            'missingChar("code", 3) → "cod"' => ['code', 3, 'cod'],
            'missingChar("chocolate", 8) → "chocolat"	' => ['chocolate', 8, 'chocolat'],
        ];
    }
}