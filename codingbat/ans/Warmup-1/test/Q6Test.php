<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q6.php';

class Q6Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakes10(int $a, int $b, bool $expected)
    {
        $target = new Q6();
        
        $result = $target->makes10($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makes10(9, 10) → true' => [9, 10, true],
            'makes10(9, 9) → false' => [9, 9, false],
            'makes10(1, 9) → true' => [1, 9, true],
            'makes10(10, 1) → true' => [10, 1, true],
            'makes10(10, 10) → true' => [10, 10, true],
            'makes10(8, 2) → true' => [8, 2, true],
            'makes10(8, 3) → false' => [8, 3, false],
            'makes10(10, 42) → true' => [10, 42, true],
            'makes10(12, -2) → true' => [12, -2, true],
        ];
    }
}