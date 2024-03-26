<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q8.php';

class Q8Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testposNeg(int $a, int $b, bool $negative, bool $expected)
    {
        $target = new Q8();
        
        $result = $target->posNeg($a, $b, $negative);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'posNeg(1, -1, false) → true' => [1, -1, false, true],
            'posNeg(-1, 1, false) → true' => [-1, 1, false, true],
            'posNeg(-4, -5, true) → true' => [-4, -5, true, true],
            'posNeg(-4, -5, false) → false' => [-4, -5, false, false],
            'posNeg(-4, 5, false) → true' => [-4, 5, false, true],
            'posNeg(-4, 5, true) → false' => [-4, 5, true, false],
            'posNeg(1, 1, false) → false' => [1, 1, false, false],
            'posNeg(-1, -1, false) → false' => [-1, -1, false, false],
            'posNeg(1, -1, true) → false' => [1, -1, true, false],
            'posNeg(-1, 1, true) → false' => [-1, 1, true, false],
            'posNeg(1, 1, true) → false' => [1, 1, true, false],
            'posNeg(-1, -1, true) → true' => [-1, -1, true, true],
            'posNeg(5, -5, false) → true' => [5, -5, false, true],
            'posNeg(-6, 6, false) → true' => [-6, 6, false, true],
            'posNeg(-5, -6, false) → false' => [-5, -6, false, false],
            'posNeg(-2, -1, false) → false' => [-2, -1, false, false],
            'posNeg(1, 2, false) → false' => [1, 2, false, false],
            'posNeg(-5, 6, true) → false' => [-5, 6, true, false],
            'posNeg(-5, -5, true) → true' => [-5, -5, true, true],
        ];
    }
}