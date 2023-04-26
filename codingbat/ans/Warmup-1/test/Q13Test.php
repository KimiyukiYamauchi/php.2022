<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q13.php';

class Q13Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testbackAround(string $str, string $expected)
    {
        $target = new Q13();
        
        $result = $target->backAround($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'backAround("cat") → "tcatt"' => ['cat', 'tcatt'],
            'backAround("Hello") → "oHelloo"' => ['Hello', 'oHelloo'],
            'backAround("a") → "aaa"' => ['a', 'aaa'],
            'backAround("abc") → "cabcc"' => ['abc', 'cabcc'],
            'backAround("read") → "dreadd"	' => ['read', 'dreadd'],
            'backAround("boo") → "obooo"' => ['boo', 'obooo'],
        ];
    }
}