<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q27.php';

class Q27Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testminCat(string $a, string $b, string $expected)
    {
        $target = new Q27();
        
        $result = $target->minCat($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'minCat("Hello", "Hi") → "loHi"' => ['Hello', 'Hi', 'loHi'],
            'minCat("Hello", "java") → "ellojava"' => ['Hello', 'java', 'ellojava'],
            'minCat("java", "Hello") → "javaello"' => ['java', 'Hello', 'javaello'],
            'minCat("abc", "x") → "cx"' => ['abc', 'x', 'cx'],
            'minCat("x", "abc") → "xc"' => ['x', 'abc', 'xc'],
            'minCat("abc", "") → ""' => ['abc', '', ''],
        ];
    }
}