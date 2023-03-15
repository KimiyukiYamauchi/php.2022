<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q9.php';

class Q9Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnotString(string $str, string $expected)
    {
        $target = new Q9();
        
        $result = $target->notString($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'notString("candy") → "not candy"' => ['candy', 'not candy'],
            'notString("x") → "not x"' => ['x', 'not x'],
            'notString("not bad") → "not bad"' => ['not bad', 'not bad'],
            'notString("bad") → "not bad"' => ['bad', 'not bad'],
            'notString("not") → "not"' => ['not', 'not'],
            'notString("is not") → "not is not"' => ['is not', 'not is not'],
            'notString("no") → "not no"' => ['no', 'not no'],
        ];
    }
}