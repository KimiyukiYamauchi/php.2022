<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q4.php';

class Q4Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testdoubleX(string $str, bool $expected)
    {
        $target = new Q4();
        
        $result = $target->doubleX($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'doubleX("axxbb") → true' => ['axxbb', true],
            'doubleX("axaxax") → false' => ['axaxax', false],
            'doubleX("xxxxx") → true' => ['xxxxx', true],
            'doubleX("xaxxx") → false' => ['xaxxx', false],
            'doubleX("aaaax") → false' => ['aaaax', false],
            'doubleX("") → false' => ['', false],
            'doubleX("abc") → false' => ['abc', false],
            'doubleX("x") → false' => ['x', false],
            'doubleX("xx") → true' => ['xx', true],
            'doubleX("xax") → false' => ['xax', false],
            'doubleX("xaxx") → false' => ['xaxx', false],
        ];
    }
}