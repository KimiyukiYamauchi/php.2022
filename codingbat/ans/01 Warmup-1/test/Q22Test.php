<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q22.php';

class Q22Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmixStart(string $str, bool $expected)
    {
        $target = new Q22();
        
        $result = $target->mixStart($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'mixStart("mix snacks") → true' => ['mix snacks', true],
            'mixStart("pix snacks") → true' => ['pix snacks', true],
            'mixStart("piz snacks") → false' => ['piz snacks', false],
            'mixStart("nix") → true' => ['nix', true],
            'mixStart("ni") → false' => ['ni', false],
            'mixStart("n") → false' => ['n', false],
            'mixStart("") → false' => ['', false],
        ];
    }
}