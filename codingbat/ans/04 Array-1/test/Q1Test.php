<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q1.php';

class Q1Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfirstLast6($nums, $expected)
    {
        $target = new Q1();
        
        $result = $target->firstLast6($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'firstLast6([1, 2, 6]) → true' => [[1, 2, 6], true],
            'firstLast6([6, 1, 2, 3]) → true' => [[6, 1, 2, 3], true],
            'firstLast6([13, 6, 1, 2, 3]) → false	' => [[13, 6, 1, 2, 3], false],
            'firstLast6([13, 6, 1, 2, 6]) → true' => [[13, 6, 1, 2, 6], true],
            'firstLast6([3, 2, 1]) → false' => [[3, 2, 1], false],
            'firstLast6([3, 6, 1]) → false' => [[3, 6, 1], false],
            'firstLast6([3, 6]) → true' => [[3, 6], true],
            'firstLast6([6]) → true' => [[6], true],
            'firstLast6([3]) → false' => [[3], false],
            'firstLast6([5, 6]) → true' => [[5, 6], true],
            'firstLast6([5, 5]) → false' => [[5, 5], false],
            'firstLast6([1, 2, 3, 4, 6]) → true' => [[1, 2, 3, 4, 6], true],
            'firstLast6([1, 2, 3, 4]) → false' => [[1, 2, 3, 4], false],
        ];
    }
}