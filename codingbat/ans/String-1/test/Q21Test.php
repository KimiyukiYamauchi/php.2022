<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q21.php';

class Q21Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testatFirst(string $str, string $expected)
    {
        $target = new Q21();
        
        $result = $target->atFirst($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'atFirst("hello") → "he"' => ['hello', 'he'],
            'atFirst("hi") → "hi"' => ['hi', 'hi'],
            'atFirst("h") → "h@"' => ['h', 'h@'],
            'atFirst("") → "@@"' => ['', '@@'],
            'atFirst("kitten") → "ki"' => ['kitten', 'ki'],
            'atFirst("java") → "ja"' => ['java', 'ja'],
            'atFirst("j") → "j@"' => ['j', 'j@'],
        ];
    }
}