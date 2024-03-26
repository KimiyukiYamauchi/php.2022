<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q24.php';

class Q24Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testintMax(int $a, int $b, int $c, int $expected)
    {
        $target = new Q24();
        
        $result = $target->intMax($a, $b, $c);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'intMax(1, 2, 3) → 3' => [1, 2, 3, 3],
            'intMax(1, 3, 2) → 3' => [1, 3, 2, 3],
            'intMax(3, 2, 1) → 3' => [3, 2, 1, 3],
            'intMax(9, 3, 3) → 9' => [9, 3, 3, 9],
            'intMax(3, 9, 3) → 9' => [3, 9, 3, 9],
            'intMax(3, 3, 9) → 9' => [3, 3, 9, 9],
            'intMax(8, 2, 3) → 8' => [8, 2, 3, 8],
            'intMax(-3, -1, -2) → -1' => [-3, -1, -2, -1],
            'intMax(6, 2, 5) → 6' => [6, 2, 5, 6],
            'intMax(5, 6, 2) → 6' => [5, 6, 2, 6],
            'intMax(5, 2, 6) → 6' => [5, 2, 6, 6],
        ];
    }
}