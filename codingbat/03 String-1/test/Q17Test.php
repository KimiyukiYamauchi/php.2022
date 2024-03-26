<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q17.php';

class Q17Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnTwice(string $str, int $n, string $expected)
    {
        $target = new Q17();
        
        $result = $target->nTwice($str, $n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'nTwice("Hello", 2) → "Helo"' => ['Hello', 2, 'Helo'],
            'nTwice("Chocolate", 3) → "Choate"' => ['Chocolate', 3, 'Choate'],
            'nTwice("Chocolate", 1) → "Ce"' => ['Chocolate', 1, 'Ce'],
            'nTwice("Chocolate", 0) → ""' => ['Chocolate', 0, ''],
            'nTwice("Hello", 4) → "Hellello"' => ['Hello', 4, 'Hellello'],
            'nTwice("Code", 4) → "CodeCode"' => ['Code', 4, 'CodeCode'],
            'nTwice("Code", 2) → "Code"' => ['Code', 2, 'Code'],
        ];
    }
}