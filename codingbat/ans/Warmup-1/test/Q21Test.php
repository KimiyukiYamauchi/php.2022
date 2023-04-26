<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q21.php';

class Q21Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testdelDel(string $str, string $expected)
    {
        $target = new Q21();
        
        $result = $target->delDel($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'delDel("adelbc") → "abc"' => ['adelbc', 'abc'],
            'delDel("adelHello") → "aHello"' => ['adelHello', 'aHello'],
            'delDel("adedbc") → "adedbc"' => ['adedbc', 'adedbc'],
            'delDel("abcdel") → "abcdel"' => ['abcdel', 'abcdel'],
            'delDel("add") → "add"' => ['add', 'add'],
            'delDel("ad") → "ad"' => ['ad', 'ad'],
            'delDel("a") → "a"' => ['a', 'a'],
            'delDel("") → ""' => ['', ''],
            'delDel("del") → "del"' => ['del', 'del'],
            'delDel("adel") → "a"' => ['adel', 'a'],
            'delDel("aadelbb") → "aadelbb"	' => ['aadelbb', 'aadelbb'],
        ];
    }
}