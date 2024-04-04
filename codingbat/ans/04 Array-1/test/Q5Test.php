<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q5.php';

class Q5Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testsum3(array $nums, int $expected)
    {
        $target = new Q5();
        
        $result = $target->sum3($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'sum3([1, 2, 3]) → 6' => [[1, 2, 3], 6],
            'sum3([5, 11, 2]) → 18' => [[5, 11, 2], 18],
            'sum3([7, 0, 0]) → 7' => [[7, 0, 0], 7],
            'sum3([1, 2, 1]) → 4' => [[1, 2, 1], 4],
            'sum3([1, 1, 1]) → 3' => [[1, 1, 1], 3],
            'sum3([2, 7, 2]) → 11' => [[2, 7, 2], 11],
        ];
    }
}