<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q6.php';

class Q6Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfirstTwo(string $str, string $expected)
    {
        $target = new Q6();
        
        $result = $target->firstTwo($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'firstTwo("Hello") → "He"' => ['Hello', 'He'],
            'firstTwo("abcdefg") → "ab"' => ['abcdefg', 'ab'],
            'firstTwo("ab") → "ab"' => ['ab', 'ab'],
            'firstTwo("a") → "a"' => ['a', 'a'],
            'firstTwo("") → ""' => ['', ''],
            'firstTwo("Kitten") → "Ki"' => ['Kitten', 'Ki'],
            'firstTwo("hi") → "hi"' => ['hi', 'hi'],
            'firstTwo("hiya") → "hi"' => ['hiya', 'hi'],
        ];
    }
}