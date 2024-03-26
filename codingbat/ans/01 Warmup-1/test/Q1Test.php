<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q1.php';

class Q1Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testsleep_in(bool $weekday, bool $vacation, bool $expected)
    {
        $target = new Q1();
        
        $result = $target->sleep_in($weekday, $vacation);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'sleepIn(false, false) → true' => [false, false, true],
            'sleepIn(true, false) → false' => [true, false, false],
            'sleepIn(false, true) → true' => [false, true, true],
            'sleepIn(true, true) → true' => [true, true, true]
        ];
    }
}