<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q30.php';

class Q30Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testendUp(string $str, string $expected)
    {
        $target = new Q30();
        
        $result = $target->endUp($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'endUp("Hello") → "HeLLO"' => ['Hello', 'HeLLO'],
            'endUp("hi there") → "hi thERE"' => ['hi there', 'hi thERE'],
            'endUp("hi") → "HI"' => ['hi', 'HI'],
            'endUp("woo hoo") → "woo HOO"' => ['woo hoo', 'woo HOO'],
            'endUp("xyz12") → "xyZ12"' => ['xyz12', 'xyZ12'],
            'endUp("x") → "X"' => ['x', 'X'],
            'endUp("") → ""' => ['', ''],
        ];
    }
}