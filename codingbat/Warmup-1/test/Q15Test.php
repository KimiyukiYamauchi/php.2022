<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q15.php';

class Q15Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfront22(string $str, string $expected)
    {
        $target = new Q15();
        
        $result = $target->front22($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'front22("kitten") → "kikittenki"' => ['kitten', 'kikittenki'],
            'front22("Ha") → "HaHaHa"' => ['Ha', 'HaHaHa'],
            'front22("abc") → "ababcab"' => ['abc', 'ababcab'],
            'front22("ab") → "ababab"' => ['ab', 'ababab'],
            'front22("a") → "aaa"' => ['a', 'aaa'],
            'ront22("") → ""' => ['', ''],
            'front22("Logic") → "LoLogicLo"' => ['Logic', 'LoLogicLo'],
        ];
    }
}