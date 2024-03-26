<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q30.php';

class Q30Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testdeFront(string $str, string $word, string $expected)
    {
        $target = new Q30();
        
        $result = $target->startWord($str, $word);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'startWord("hippo", "hi") → "hi"' => ['hippo', 'hi', 'hi'],
            'startWord("hippo", "xip") → "hip"' => ['hippo', 'xip', 'hip'],
            'startWord("hippo", "i") → "h"' => ['hippo', 'i', 'h'],
            'startWord("hippo", "ix") → ""' => ['hippo', 'ix', ''],
            'startWord("h", "ix") → ""' => ['h', 'ix', ''],
            'startWord("", "i") → ""' => ['', 'i', ''],
            'startWord("hip", "zi") → "hi"' => ['hip', 'zi', 'hi'],
            'startWord("hip", "zip") → "hip"' => ['hip', 'zip', 'hip'],
            'startWord("hip", "zig") → ""' => ['hip', 'zig', ''],
            'startWord("h", "z") → "h"' => ['h', 'z', 'h'],
            'startWord("hippo", "xippo") → "hippo"' => ['hippo', 'xippo', 'hippo'],
            'startWord("hippo", "xyz") → ""' => ['hippo', 'xyz', ''],
            'startWord("hippo", "hip") → "hip"' => ['hippo', 'hip', 'hip'],
            'startWord("kitten", "cit") → "kit"' => ['kitten', 'cit', 'kit'],
            'startWord("kit", "cit") → "kit"' => ['kit', 'cit', 'kit'],
        ];
    }
}