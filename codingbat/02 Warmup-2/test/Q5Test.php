<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q5.php';

class Q5Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringBits(string $str, string $expected)
    {
        $target = new Q5();
        
        $result = $target->stringBits($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringBits("Hello") → "Hlo"' => ['Hello', 'Hlo'],
            'stringBits("Hi") → "H"' => ['Hi', 'H'],
            'stringBits("Heeololeo") → "Hello"' => ['Heeololeo', 'Hello'],
            'stringBits("HiHiHi") → "HHH"' => ['HiHiHi', 'HHH'],
            'stringBits("") → ""' => ['', ''],
            'stringBits("Greetings") → "Getns"' => ['Greetings', 'Getns'],
            'stringBits("Chocoate") → "Coot"' => ['Chocoate', 'Coot'],
            'stringBits("pi") → "p"' => ['pi', 'p'],
            'stringBits("Hello Kitten") → "HloKte"' => ['Hello Kitten', 'HloKte'],
            'stringBits("hxaxpxpxy") → "happy"' => ['hxaxpxpxy', 'happy'],
        ];
    }
}