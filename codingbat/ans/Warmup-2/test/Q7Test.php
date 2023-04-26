<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q7.php';

class Q7Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testlast2(string $str, int $expected)
    {
        $target = new Q7();
        
        $result = $target->last2($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'last2("hixxhi") → 1' => ['hixxhi', 1],
            'last2("xaxxaxaxx") → 1' => ['xaxxaxaxx', 1],
            'last2("axxxaaxx") → 2' => ['axxxaaxx', 2],
            'last2("xxaxxaxxaxx") → 3' => ['xxaxxaxxaxx', 3],
            'last2("xaxaxaxx") → 0' => ['xaxaxaxx', 0],
            'last2("xxxx") → 2' => ['xxxx', 2],
            'last2("13121312") → 1' => ['13121312', 1],
            'last2("11212") → 1' => ['11212', 1],
            'last2("13121311") → 0' => ['13121311', 0],
            'last2("1717171") → 2' => ['1717171', 2],
            'last2("hi") → 0' => ['hi', 0],
            'last2("h") → 0' => ['h', 0],
            'last2("") → 0' => ['', 0],
        ];
    }
}