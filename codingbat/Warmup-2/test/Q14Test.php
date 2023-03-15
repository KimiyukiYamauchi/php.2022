<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q14.php';

class Q14Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringYak(string $str, string $expected)
    {
        $target = new Q14();
        
        $result = $target->stringYak($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringYak("yakpak") → "pak"' => ["yakpak", "pak"],
            'stringYak("pakyak") → "pak"' => ["pakyak", "pak"],
            'stringYak("yak123ya") → "123ya"' => ["yak123ya", "123ya"],
            'stringYak("yak") → ""' => ["yak", ""],
            'stringYak("yakxxxyak") → "xxx"' => ["yakxxxyak", "xxx"],
            'stringYak("HiyakHi") → "HiHi"' => ["HiyakHi", "HiHi"],
            'stringYak("xxxyakyyyakzzz") → "xxxyyzzz"' => ["xxxyakyyyakzzz", "xxxyyzzz"],
        ];
    }
}