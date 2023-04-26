<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q10.php';

class Q10Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnonStart(string $a, string $b, string $expected)
    {
        $target = new Q10();
        
        $result = $target->nonStart($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'nonStart("Hello", "There") → "ellohere"' => ['Hello', 'There', 'ellohere'],
            'nonStart("java", "code") → "avaode"' => ['java', 'code', 'avaode'],
            'nonStart("shotl", "java") → "hotlava"' => ['shotl', 'java', 'hotlava'],
            'nonStart("ab", "xy") → "by"' => ['ab', 'xy', 'by'],
            'nonStart("ab", "x") → "b"' => ['ab', 'x', 'b'],
            'nonStart("x", "ac") → "c"' => ['x', 'ac', 'c'],
            'nonStart("a", "x") → ""' => ['a', 'x', ''],
            'nonStart("kit", "kat") → "itat"' => ['kit', 'kat', 'itat'],
            'nonStart("mart", "dart") → "artart"' => ['mart', 'dart', 'artart'],
        ];
    }
}