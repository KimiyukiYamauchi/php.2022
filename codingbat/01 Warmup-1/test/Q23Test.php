<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q23.php';

class Q23Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststartOz(String $str, String $expected)
    {
        $target = new Q23();
        
        $result = $target->startOz($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'startOz("ozymandias") → "oz"' => ['ozymandias', 'oz'],
            'startOz("bzoo") → "z"' => ['bzoo', 'z'],
            'startOz("oxx") → "o"' => ['oxx', 'o'],
            'startOz("oz") → "oz"' => ['oz', 'oz'],
            'startOz("ounce") → "o"' => ['ounce', 'o'],
            'startOz("o") → "o"' => ['o', 'o'],
            'startOz("abc") → ""' => ['abc', ''],
            'startOz("") → ""' => ['', ''],
            'startOz("zoo") → ""' => ['zoo', ''],
            'startOz("aztec") → "z"' => ['aztec', 'z'],
            'startOz("zzzz") → "z"' => ['zzzz', 'z'],
            'startOz("oznic") → "oz"' => ['oznic', 'oz'],
        ];
    }
}