<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q6.php';

class Q6Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringSplosion(string $str, string $expected)
    {
        $target = new Q6();
        
        $result = $target->stringSplosion($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringSplosion("Code") → "CCoCodCode"' => ['Code', 'CCoCodCode'],
            'stringSplosion("abc") → "aababc"' => ['abc', 'aababc'],
            'stringSplosion("ab") → "aab"' => ['ab', 'aab'],
            'stringSplosion("x") → "x"' => ['x', 'x'],
            'stringSplosion("fade") → "ffafadfade"' => ['fade', 'ffafadfade'],
            'stringSplosion("There") → "TThTheTherThere"' => ['There', 'TThTheTherThere'],
            'stringSplosion("Kitten") → "KKiKitKittKitteKitten"' => ['Kitten', 'KKiKitKittKitteKitten'],
            'stringSplosion("Bye") → "BByBye"	' => ['Bye', 'BByBye'],
            'stringSplosion("Good") → "GGoGooGood"' => ['Good', 'GGoGooGood'],
            'stringSplosion("Bad") → "BBaBad"' => ['Bad', 'BBaBad'],
        ];
    }
}