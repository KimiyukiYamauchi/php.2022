<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q2.php';

class Q2Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmonkeyTrouble(bool $aSmile, bool $bSmile, bool $expected)
    {
        $target = new Q2();
        
        $result = $target->monkeyTrouble($aSmile, $bSmile);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'monkeyTrouble(true, true) → true' => [true, true, true],
            'monkeyTrouble(false, false) → true' => [false, false, true],
            'monkeyTrouble(true, false) → false' => [true, false, false],
            'monkeyTrouble(false, true) → false' => [false, true, false]
        ];
    }
}