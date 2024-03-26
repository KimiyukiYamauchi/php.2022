<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q18.php';

class Q18Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testin1020(int $a, int $b, bool $expected)
    {
        $target = new Q18();
        
        $result = $target->in1020($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'in1020(12, 99) → true' => [12, 99, true],
            'in1020(21, 12) → true' => [21, 12, true],
            'in1020(8, 99) → false' => [8, 99, false],
            'in1020(99, 10) → true' => [99, 10, true],
            'in1020(20, 20) → true' => [20, 20, true],
            'in1020(21, 21) → false' => [21, 21, false],
            'in1020(9, 9) → false' => [9, 9, false],
        ];
    }
}