<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q4.php';

class Q4Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testdiff21(int $n, int $expected)
    {
        $target = new Q4();
        
        $result = $target->diff21($n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'diff21(19) → 2' => [19, 2],
            'diff21(10) → 11' => [10, 11],
            'diff21(21) → 0' => [21, 0],
            'diff21(22) → 2	' => [22, 2],
            'diff21(25) → 8' => [25, 8],
            'diff21(30) → 18' => [30, 18],
            'diff21(0) → 21' => [0, 21],
            'diff21(1) → 20' => [1, 20],
            'diff21(2) → 19' => [2, 19],
            'diff21(-1) → 22' => [-1, 22],
            'diff21(-2) → 23' => [-2, 23],
            'diff21(50) → 58' => [50, 58],
        ];
    }
}