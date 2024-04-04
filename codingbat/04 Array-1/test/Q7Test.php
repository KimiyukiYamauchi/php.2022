<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q7.php';

class Q7Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testreverse3(array $nums, array $expected)
    {
        $target = new Q7();
        
        $result = $target->reverse3($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'reverse3([1, 2, 3]) → [3, 2, 1]' => [[1, 2, 3], [3, 2, 1]],
            'reverse3([5, 11, 9]) → [9, 11, 5]' => [[5, 11, 9], [9, 11, 5]],
            'reverse3([7, 0, 0]) → [0, 0, 7]' => [[7, 0, 0], [0, 0, 7]],
            'reverse3([2, 1, 2]) → [2, 1, 2]' => [[2, 1, 2], [2, 1, 2]],
            'reverse3([1, 2, 1]) → [1, 2, 1]' => [[1, 2, 1], [1, 2, 1]],
            'reverse3([2, 11, 3]) → [3, 11, 2]' => [[2, 11, 3], [3, 11, 2]],
            'reverse3([0, 6, 5]) → [5, 6, 0]' => [[0, 6, 5], [5, 6, 0]],
            'reverse3([7, 2, 3]) → [3, 2, 7]' => [[7, 2, 3], [3, 2, 7]],
        ];
    }
}