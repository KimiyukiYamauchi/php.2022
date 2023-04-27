<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q28.php';

class Q28Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststringE(string $str, bool $expected)
    {
        $target = new Q28();
        
        $result = $target->stringE($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'stringE("Hello") → true' => ['Hello', true],
            'stringE("Heelle") → true' => ['Heelle', true],
            'stringE("Heelele") → false' => ['Heelele', false],
            'stringE("Hll") → false' => ['Hll', false],
            'stringE("e") → true' => ['e', true],
            'stringE("") → false' => ['', false],
        ];
    }
}