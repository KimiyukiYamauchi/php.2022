<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q8.php';

class Q8Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmaxEnd3(array $nums, array $expected)
    {
        $target = new Q8();
        
        $result = $target->maxEnd3($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'maxEnd3([1, 2, 3]) → [3, 3, 3]' => [[1, 2, 3], [3, 3, 3]],
            'maxEnd3([11, 5, 9]) → [11, 11, 11]' => [[11, 5, 9], [11, 11, 11]],
            'maxEnd3([2, 11, 3]) → [3, 3, 3]' => [[2, 11, 3], [3, 3, 3]],
            'maxEnd3([11, 3, 3]) → [11, 11, 11]' => [[11, 3, 3],  [11, 11, 11]],
            'maxEnd3([3, 11, 11]) → [11, 11, 11]' => [[3, 11, 11], [11, 11, 11]],
            'maxEnd3([2, 2, 2]) → [2, 2, 2]' => [[2, 2, 2], [2, 2, 2]],
            'maxEnd3([2, 11, 2]) → [2, 2, 2]' => [[2, 11, 2], [2, 2, 2]],
            'maxEnd3([0, 0, 1]) → [1, 1, 1]' => [[0, 0, 1], [1, 1, 1]],
        ];
    }
}