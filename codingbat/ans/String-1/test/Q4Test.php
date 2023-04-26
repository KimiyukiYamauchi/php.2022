<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q4.php';

class Q4Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakeOutWord(string $out, string $word, string $expected)
    {
        $target = new Q4();
        
        $result = $target->makeOutWord($out, $word);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeOutWord("<<>>", "Yay") → "<<Yay>>"' => ['<<>>', 'Yay', '<<Yay>>'],
            'makeOutWord("<<>>", "WooHoo") → "<<WooHoo>>"' => ['<<>>', 'WooHoo', '<<WooHoo>>'],
            'makeOutWord("[[]]", "word") → "[[word]]"' => ['[[]]', 'word', '[[word]]'],
            'makeOutWord("HHoo", "Hello") → "HHHellooo"' => ['HHoo', 'Hello', 'HHHellooo'],
            'makeOutWord("abyz", "YAY") → "abYAYyz"' => ['abyz', 'YAY', 'abYAYyz'],
        ];
    }
}