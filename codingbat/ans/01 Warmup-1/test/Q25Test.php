<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q25.php';

class Q25Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testclose10(int $a, int $b, int $expected)
    {
        $target = new Q25();
        
        $result = $target->close10($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'close10(8, 13) → 8' => [8, 13, 8],
            'close10(13, 8) → 8' => [13, 8, 8],
            'close10(13, 7) → 0' => [13, 7, 0],
            'close10(7, 13) → 0' => [7, 13, 0],
            'close10(9, 13) → 9' => [9, 13, 9],
            'close10(13, 8) → 8' => [13, 8, 8],
            'close10(10, 12) → 10' => [10, 12, 10],
            'close10(11, 10) → 10' => [11, 10, 10],
            'close10(5, 21) → 5' => [5, 21, 5],
            'close10(0, 20) → 0' => [0, 20, 0],
            'close10(10, 10) → 0' => [10, 10, 0],
        ];
    }
}