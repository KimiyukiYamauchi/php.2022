<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q14.php';

class Q14Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakeLast(array $nums, array $expected)
    {
        $target = new Q14();
        
        $result = $target->makeLast($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeLast([4, 5, 6]) → [0, 0, 0, 0, 0, 6]' => [[4, 5, 6], [0, 0, 0, 0, 0, 6]],
            'makeLast([1, 2]) → [0, 0, 0, 2]' => [[1, 2], [0, 0, 0, 2]],
            'makeLast([3]) → [0, 3]' => [[3], [0, 3]],
            'makeLast([0]) → [0, 0]' => [[0], [0, 0]],
            'makeLast([7, 7, 7]) → [0, 0, 0, 0, 0, 7]' => [[7, 7, 7], [0, 0, 0, 0, 0, 7]],
            'makeLast([3, 1, 4]) → [0, 0, 0, 0, 0, 4]' => [[3, 1, 4], [0, 0, 0, 0, 0, 4]],
            'makeLast([1, 2, 3, 4]) → [0, 0, 0, 0, 0, 0, 0, 4]' => [[1, 2, 3, 4], [0, 0, 0, 0, 0, 0, 0, 4]],
            'makeLast([1, 2, 3, 0]) → [0, 0, 0, 0, 0, 0, 0, 0]' => [[1, 2, 3, 0], [0, 0, 0, 0, 0, 0, 0, 0]],
            'makeLast([2, 4]) → [0, 0, 0, 4]' => [[2, 4], [0, 0, 0, 4]],
        ];
    }
}