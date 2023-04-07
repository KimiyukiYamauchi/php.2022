<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q8.php';

class Q8Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testwithoutEnd(string $str, string $expected)
    {
        $target = new Q8();
        
        $result = $target->withoutEnd($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'withoutEnd("Hello") → "ell"' => ['Hello', 'ell'],
            'withoutEnd("java") → "av"' => ['java', 'av'],
            'withoutEnd("coding") → "odin"' => ['coding', 'odin'],
            'withoutEnd("code") → "od"' => ['code', 'od'],
            'withoutEnd("ab") → ""' => ['ab', ''],
            'withoutEnd("Chocolate!") → "hocolate"' => ['Chocolate!', 'hocolate'],
            'withoutEnd("kitten") → "itte"' => ['kitten', 'itte'],
            'withoutEnd("woohoo") → "ooho"' => ['woohoo', 'ooho'],
        ];
    }
}