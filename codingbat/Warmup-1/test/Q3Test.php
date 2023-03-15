<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q3.php';

class Q3Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testsumDouble(int $a, int $b, int $expected)
    {
        $target = new Q3();
        
        $result = $target->sumDouble($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'sumDouble(1, 2) → 3' => [1, 2, 3],
            'sumDouble(3, 2) → 5' => [3, 2, 5],
            'sumDouble(2, 2) → 8' => [2, 2, 8],
            'sumDouble(-1, 0) → -1' => [-1, 0, -1],
            'sumDouble(3, 3) → 12' => [3, 3, 12],
            'sumDouble(0, 0) → 0' => [0, 0, 0],
            'sumDouble(0, 1) → 1' => [0, 1, 1],
            'sumDouble(3, 4) → 7' => [3, 4, 7],
        ];
    }
}