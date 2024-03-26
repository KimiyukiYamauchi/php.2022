<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q17.php';

class Q17Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testicyHot(int $temp1, int $temp2, bool $expected)
    {
        $target = new Q17();
        
        $result = $target->icyHot($temp1, $temp2);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'icyHot(120, -1) → true' => [120, -1, true],
            'icyHot(-1, 120) → true' => [-1, 120, true],
            'icyHot(2, 120) → false' => [2, 120, false],
            'icyHot(-1, 100) → false' => [-1, 100, false],
            'icyHot(-2, -2) → false' => [-2, -2, false],
            'icyHot(120, 120) → false' => [120, 120, false],
        ];
    }
}