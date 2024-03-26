<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q23.php';

class Q23Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testconCat(string $a, string $b, string $expected)
    {
        $target = new Q23();
        
        $result = $target->conCat($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'conCat("abc", "cat") → "abcat"' => ['abc', 'cat', 'abcat'],
            'conCat("dog", "cat") → "dogcat"' => ['dog', 'cat', 'dogcat'],
            'conCat("abc", "") → "abc"' => ['abc', '', 'abc'],
            'conCat("", "cat") → "cat"' => ['', 'cat', 'cat'],
            'conCat("pig", "g") → "pig"' => ['pig', 'g', 'pig'],
            'conCat("pig", "doggy") → "pigdoggy"' => ['pig', 'doggy', 'pigdoggy'],
        ];
    }
}