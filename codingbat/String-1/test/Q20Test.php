<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q20.php';

class Q20Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testhasBad(string $str, bool $expected)
    {
        $target = new Q20();
        
        $result = $target->hasBad($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'hasBad("badxx") → true' => ['badxx', true],
            'hasBad("xbadxx") → true' => ['xbadxx', true],
            'hasBad("xxbadxx") → false' => ['xxbadxx', false],
            'hasBad("code") → false' => ['code', false],
            'hasBad("bad") → true' => ['bad', true],
            'hasBad("ba") → false' => ['ba', false],
            'hasBad("xba") → false' => ['xba', false],
            'hasBad("xbad") → true' => ['xbad', true],
            'hasBad("") → false' => ['', false],
            'hasBad("badyy") → true' => ['badyy', true],
        ];
    }
}