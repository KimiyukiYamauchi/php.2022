<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q14.php';

class Q14Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testwithouEnd2(string $str, string $expected)
    {
        $target = new Q14();
        
        $result = $target->withouEnd2($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'withouEnd2("Hello") → "ell"' => ['Hello', 'ell'],
            'withouEnd2("abc") → "b"' => ['abc', 'b'],
            'withouEnd2("ab") → ""' => ['ab', ''],
            'withouEnd2("a") → ""' => ['a', ''],
            'withouEnd2("") → ""' => ['', ''],
            'withouEnd2("coldy") → "old"' => ['coldy', 'old'],
            'withouEnd2("java code") → "ava cod"' => ['java code', 'ava cod'],
        ];
    }
}