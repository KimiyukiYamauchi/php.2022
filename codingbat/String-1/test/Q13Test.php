<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q13.php';

class Q13Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testtheEnd(string $str, bool $front, string $expected)
    {
        $target = new Q13();
        
        $result = $target->theEnd($str, $front);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'theEnd("Hello", true) → "H"' => ['Hello', true, 'H'],
            'theEnd("Hello", false) → "o"' => ['Hello', false, 'o'],
            'theEnd("oh", true) → "o"' => ['oh', true, 'o'],
            'theEnd("oh", false) → "h"' => ['oh', false, 'h'],
            'theEnd("x", true) → "x"' => ['x', true, 'x'],
            'theEnd("x", false) → "x"' => ['x', false, 'x'],
            'theEnd("java", true) → "j"' => ['java', true, 'j'],
            'theEnd("chocolate", false) → "e"' => ['chocolate', false, 'e'],
            'theEnd("1234", true) → "1"' => ['1234', true, '1'],
            'theEnd("code", false) → "e"' => ['code', false, 'e'],
        ];
    }
}