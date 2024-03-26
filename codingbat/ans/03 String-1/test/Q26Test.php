<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q26.php';

class Q26Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfrontAgain(string $str, bool $expected)
    {
        $target = new Q26();
        
        $result = $target->frontAgain($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'frontAgain("edited") → true' => ['edited', true],
            'frontAgain("edit") → false' => ['edit', false],
            'frontAgain("ed") → true' => ['ed', true],
            'frontAgain("jj") → true' => ['jj', true],
            'frontAgain("jjj") → true' => ['jjj', true],
            'frontAgain("jjjj") → true' => ['jjjj', true],
            'frontAgain("jjjk") → false' => ['jjjk', false],
            'frontAgain("x") → false' => ['x', false],
            'frontAgain("") → false' => ['', false],
            'frontAgain("java") → false' => ['java', false],
            'frontAgain("javaja") → true' => ['javaja', true],
        ];
    }
}