<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q24.php';

class Q24Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testlastTwo(string $str, string $expected)
    {
        $target = new Q24();
        
        $result = $target->lastTwo($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'lastTwo("coding") → "codign"' => ['coding','codign'],
            'lastTwo("cat") → "cta"' => ['cat','cta'],
            'lastTwo("ab") → "ba"' => ['ab','ba'],
            'lastTwo("a") → "a"' => ['a','a'],
            'lastTwo("") → ""' => ['',''],
        ];
    }
}