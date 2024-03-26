<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q11.php';

class Q11Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringMatch(string $a, string $b, int $expected)
    {
        $target = new Q11();
        
        $result = $target->stringMatch($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringMatch("xxcaazz", "xxbaaz") → 3' => ["xxcaazz", "xxbaaz", 3],
            'stringMatch("abc", "abc") → 2' => ["abc", "abc", 2],
            'stringMatch("abc", "axc") → 0' => ["abc", "axc", 0],
            'stringMatch("hello", "he") → 1' => ["hello", "he", 1],
            'stringMatch("he", "hello") → 1' => ["he", "hello", 1],
            'stringMatch("h", "hello") → 0' => ["h", "hello", 0],
            'stringMatch("", "hello") → 0' => ["", "hello", 0],
            'stringMatch("aabbccdd", "abbbxxd") → 1' => ["aabbccdd", "abbbxxd", 1],
            'stringMatch("aaxxaaxx", "iaxxai") → 3' => ["aaxxaaxx", "iaxxai", 3],
            'stringMatch("iaxxai", "aaxxaaxx") → 3' => ["iaxxai", "aaxxaaxx", 3],
        ];
    }
}