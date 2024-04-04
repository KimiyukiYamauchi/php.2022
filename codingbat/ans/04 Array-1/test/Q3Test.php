<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q3.php';

class Q3Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakePi(array $expected)
    {
        $target = new Q3();
        
        $result = $target->makePi();
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makePi() → [3, 1, 4]' => [[3, 1, 4]],
        ];
    }
}