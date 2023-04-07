<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q5.php';

class Q5Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testrrotTrouble(bool $talking, int $hour, bool $expected)
    {
        $target = new Q5();
        
        $result = $target->parrotTrouble($talking, $hour);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'parrotTrouble(true, 6) → true' => [true, 6, true],
            'parrotTrouble(true, 7) → false' => [true, 7, false],
            'parrotTrouble(false, 6) → false' => [false, 6, false],
            'parrotTrouble(true, 21) → true' => [true, 21, true],
            'parrotTrouble(false, 21) → false' => [false, 21, false],
            'parrotTrouble(false, 20) → false	' => [false, 20, false],
            'parrotTrouble(true, 23) → true' => [true, 23, true],
            'parrotTrouble(false, 23) → false' => [false, 23, false],
            'parrotTrouble(true, 20) → false	' => [true, 20, false],
            'parrotTrouble(false, 12) → false' => [false, 12, false],
            'parrotTrouble(true, 12) → false' => [true, 12, false],
        ];
    }
}