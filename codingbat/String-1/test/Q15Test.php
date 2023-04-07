<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q15.php';

class Q15Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmiddleTwo(string $str, string $expected)
    {
        $target = new Q15();
        
        $result = $target->middleTwo($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'middleTwo("string") → "ri"' => ['string', 'ri'],
            'middleTwo("code") → "od"' => ['code', 'od'],
            'middleTwo("Practice") → "ct"' => ['Practice', 'ct'],
            'middleTwo("ab") → "ab"' => ['ab', 'ab'],
            'middleTwo("0123456789") → "45"' => ['0123456789', '45'],
        ];
    }
}