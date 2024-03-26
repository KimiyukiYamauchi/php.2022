<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q14.php';

class Q14Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testor35(int $n, bool $expected)
    {
        $target = new Q14();
        
        $result = $target->or35($n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'or35(3) → true' => [3, true],
            'or35(10) → true' => [10, true],
            'or35(8) → false' => [8, false],
            'or35(15) → true' => [15, true],
            'or35(5) → true' => [5, true],
            'or35(9) → true' => [9, true],
            'or35(4) → false' => [4, false],
            'or35(7) → false' => [7, false],
            'or35(6) → true' => [6, true],
            'or35(17) → false' => [17, false],
            'or35(18) → true' => [18, true],
            'or35(29) → false' => [29, false],
            'or35(20) → true' => [20, true],
            'or35(21) → true' => [21, true],
            'or35(22) → false' => [22, false],
            'or35(45) → true' => [45, true],
            'or35(99) → true' => [99, true],
            'or35(100) → true' => [100, true],
            'or35(101) → false' => [101, false],
            'or35(121) → false' => [121, false],
            'or35(122) → false' => [122, false],
            'or35(123) → true' => [123, true],
        ];
    }
}