<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q26.php';

class Q26Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfront11(array $a, array $b, array $expected)
    {
        $target = new Q26();
        
        $result = $target->front11($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'front11([1, 2, 3], [7, 9, 8]) → [1, 7]' => [[1, 2, 3], [7, 9, 8], [1, 7]],
            'front11([1], [2]) → [1, 2]' => [[1], [2], [1, 2]],
            'front11([1, 7], []) → [1]' => [[1, 7], [], [1]],
            'front11([], [2, 8]) → [2]' => [[], [2, 8], [2]],
            'front11([], []) → []' => [[], [], []],
            'front11([3], [1, 4, 1, 9]) → [3, 1]' => [[3], [1, 4, 1, 9], [3, 1]],
            'front11([1, 4, 1, 9], []) → [1]' => [[1, 4, 1, 9], [], [1]],
        ];
    }
}