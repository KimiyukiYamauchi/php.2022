<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q13.php';

class Q13Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testaltPairs(string $str, string $expected)
    {
        $target = new Q13();
        
        $result = $target->altPairs($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'altPairs("kitten") → "kien"' => ["kitten", "kien"],
            'altPairs("Chocolate") → "Chole"' => ["Chocolate", "Chole"],
            'altPairs("CodingHorror") → "Congrr"' => ["CodingHorror", "Congrr"],
            'altPairs("yak") → "ya"' => ["yak", "ya"],
            'altPairs("ya") → "ya"' => ["ya", "ya"],
            'altPairs("y") → "y"' => ["y", "y"],
            'altPairs("") → ""' => ["", ""],
            'altPairs("ThisThatTheOther") → "ThThThth"' => ["ThisThatTheOther", "ThThThth"],
        ];
    }
}