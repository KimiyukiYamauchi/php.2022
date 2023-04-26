<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q28.php';

class Q28Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testextraFront(string $str, string $expected)
    {
        $target = new Q28();
        
        $result = $target->extraFront($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'extraFront("Hello") → "HeHeHe"' => ['Hello', 'HeHeHe'],
            'extraFront("ab") → "ababab"' => ['ab', 'ababab'],
            'extraFront("H") → "HHH"' => ['H', 'HHH'],
            'extraFront("") → ""' => ['', ''],
            'extraFront("Candy") → "CaCaCa"' => ['Candy', 'CaCaCa'],
            'extraFront("Code") → "CoCoCo"' => ['Code', 'CoCoCo'],
        ];
    }
}