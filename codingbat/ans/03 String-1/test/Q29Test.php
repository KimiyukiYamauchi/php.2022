<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q29.php';

class Q29Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testdeFront(string $str, string $expected)
    {
        $target = new Q29();
        
        $result = $target->deFront($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'deFront("Hello") → "llo"' => ['Hello', 'llo'],
            'deFront("java") → "va"' => ['java', 'va'],
            'deFront("away") → "aay"' => ['away', 'aay'],
            'deFront("axy") → "ay"' => ['axy', 'ay'],
            'deFront("abc") → "abc"' => ['abc', 'abc'],
            'deFront("xby") → "by"' => ['xby', 'by'],
            'deFront("ab") → "ab"' => ['ab', 'ab'],
            'deFront("ax") → "a"' => ['ax', 'a'],
            'deFront("axb") → "ab"' => ['axb', 'ab'],
            'deFront("aaa") → "aa"' => ['aaa', 'aa'],
            'deFront("xbc") → "bc"' => ['xbc', 'bc'],
            'deFront("bbb") → "bb"' => ['bbb', 'bb'],
            'deFront("bazz") → "zz"' => ['bazz', 'zz'],
            'deFront("ba") → ""' => ['ba', ''],
            'deFront("abxyz") → "abxyz"' => ['abxyz', 'abxyz'],
            'deFront("hi") → ""' => ['hi', ''],
            'deFront("his") → "s"' => ['his', 's'],
            'deFront("xz") → ""' => ['xz', ''],
            'deFront("zzz") → "z"' => ['zzz', 'z'],
        ];
    }
}