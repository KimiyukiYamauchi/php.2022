<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q26.php';

class Q26Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testin3050(int $a, int $b, bool $expected)
    {
        $target = new Q26();
        
        $result = $target->in3050($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'in3050(30, 31) → true' => [30, 31, true],
            'in3050(30, 41) → false' => [30, 41, false],
            'in3050(40, 50) → true' => [40, 50, true],
            'in3050(40, 51) → false' => [40, 51, false],
            'in3050(39, 50) → false' => [39, 50, false],
            'in3050(50, 39) → false' => [50, 39, false],
            'in3050(40, 39) → true' => [40, 39, true],
            'in3050(49, 48) → true' => [49, 48, true],
            'in3050(50, 40) → true' => [50, 40, true],
            'in3050(50, 51) → false' => [50, 51, false],
            'in3050(35, 36) → true' => [35, 36, true],
            'in3050(35, 45) → false' => [35, 45, false],
        ];
    }
}