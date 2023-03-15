<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q16.php';

class Q16Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststartHi(string $str, bool $expected)
    {
        $target = new Q16();
        
        $result = $target->startHi($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'startHi("hi there") → true' => ['hi there', true],
            'startHi("hi") → true' => ['hi', true],
            'startHi("hello hi") → false' => ['hello hi', false],
            'startHi("he") → false' => ['he', false],
            'startHi("h") → false' => ['h', false],
            'startHi("") → false' => ['', false],
            'startHi("ho hi") → false' => ['ho hi', false],
            'startHi("hi ho") → true' => ['hi ho', true],
        ];
    }
}