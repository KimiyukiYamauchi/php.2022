<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q23.php';

class Q23Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfrontPiece(array $nums, array $expected)
    {
        $target = new Q23();
        
        $result = $target->frontPiece($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'frontPiece([1, 2, 3]) → [1, 2]' => [[1, 2, 3], [1, 2]],
            'frontPiece([1, 2]) → [1, 2]	' => [[1, 2], [1, 2]],
            'frontPiece([1]) → [1]' => [[1], [1]],
            'frontPiece([]) → []' => [[], []],
            'frontPiece([6, 5, 0]) → [6, 5]' => [[6, 5, 0], [6, 5]],
            'frontPiece([6, 5]) → [6, 5]' => [[6, 5], [6, 5]],
            'frontPiece([3, 1, 4, 1, 5]) → [3, 1]' => [[3, 1, 4, 1, 5], [3, 1]],
            'frontPiece([6]) → [6]' => [[6], [6]],
        ];
    }
}