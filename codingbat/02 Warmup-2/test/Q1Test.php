<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q1.php';

class Q1Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringTimes(string $str, int $n, string $expected)
    {
        $target = new Q1();
        
        $result = $target->stringTimes($str, $n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringTimes("Hi", 2) → "HiHi"' => ['Hi', 2, 'HiHi'],
            'stringTimes("Hi", 3) → "HiHiHi"' => ['Hi', 3, 'HiHiHi'],
            'stringTimes("Hi", 1) → "Hi"' => ['Hi', 1, 'Hi'],
            'stringTimes("Hi", 0) → ""' => ['Hi', 0, ''],
            'stringTimes("Hi", 5) → "HiHiHiHiHi"' => ['Hi', 5, 'HiHiHiHiHi'],
            'stringTimes("Oh Boy!", 2) → "Oh Boy!Oh Boy!"' => ['Oh Boy!', 2, 'Oh Boy!Oh Boy!'],
            'stringTimes("x", 4) → "xxxx"' => ['x', 4, 'xxxx'],
            'stringTimes("", 4) → ""' => ['', 4, ''],
            'stringTimes("code", 2) → "codecode"' => ['code', 2, 'codecode'],
            'stringTimes("code", 3) → "codecodecode"' => ['code', 3, 'codecodecode'],
        ];
    }
}