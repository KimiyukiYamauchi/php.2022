<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q19.php';

class Q19Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testhasTeen(int $a, int $b, int $c, bool $expected)
    {
        $target = new Q19();
        
        $result = $target->hasTeen($a, $b, $c);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'hasTeen(13, 20, 10) → true' => [13, 20, 10, true],
            'hasTeen(20, 19, 10) → true' => [20, 19, 10, true],
            'hasTeen(20, 10, 13) → true' => [20, 10, 13, true],
            'hasTeen(1, 20, 12) → false' => [1, 20, 12, false],
            'hasTeen(19, 20, 12) → true' => [19, 20, 12, true],
            'hasTeen(12, 20, 19) → true' => [12, 20, 19, true],
            'hasTeen(12, 9, 20) → false' => [12, 9, 20, false],
            'hasTeen(12, 18, 20) → true' => [12, 18, 20, true],
            'hasTeen(14, 2, 20) → true' => [14, 2, 20, true],
            'hasTeen(4, 2, 20) → false' => [4, 2, 20, false],
            'hasTeen(11, 22, 22) → false' => [11, 22, 22, false],
        ];
    }
}