<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q5.php';

class Q5Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testextraEnd(string $str, string $expected)
    {
        $target = new Q5();
        
        $result = $target->extraEnd($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'extraEnd("Hello") → "lololo"' => ['Hello', 'lololo'],
            'extraEnd("ab") → "ababab"' => ['ab', 'ababab'],
            'extraEnd("Hi") → "HiHiHi"' => ['Hi', 'HiHiHi'],
            'extraEnd("Candy") → "dydydy"	' => ['Candy', 'dydydy'],
            'extraEnd("Code") → "dedede""	' => ['Code', 'dedede'],
        ];
    }
}