<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q27.php';

class Q27Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmax1020(int $a, int $b, int $expected)
    {
        $target = new Q27();
        
        $result = $target->max1020($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'max1020(11, 19) → 19' => [11, 19, 19],
            'max1020(19, 11) → 19' => [19, 11, 19],
            'max1020(11, 9) → 11' => [11, 9, 11],
            'max1020(9, 21) → 0' => [9, 21, 0],
            'max1020(10, 21) → 10' => [10, 21, 10],
            'max1020(21, 10) → 10' => [21, 10, 10],
            'max1020(9, 11) → 11' => [9, 11, 11],
            'max1020(23, 10) → 10' => [23, 10, 10],
            'max1020(20, 10) → 20' => [20, 10, 20],
            'max1020(7, 20) → 20' => [7, 20, 20],
            'max1020(17, 16) → 17' => [17, 16, 17],
        ];
    }
}