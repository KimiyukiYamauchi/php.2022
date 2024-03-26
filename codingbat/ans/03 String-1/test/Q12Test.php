<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q12.php';

class Q12Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testright2(string $str, string $expected)
    {
        $target = new Q12();
        
        $result = $target->right2($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'right2("Hello") → "loHel"' => ["Hello", "loHel"],
            'right2("java") → "vaja"' => ["java", "vaja"],
            'right2("Hi") → "Hi"' => ["Hi", "Hi"],
            'right2("code") → "deco"' => ["code", "deco"],
            'right2("cat") → "atc"' => ["cat", "atc"],
            'right2("12345") → "45123"' => ["12345", "45123"],
        ];
    }
}