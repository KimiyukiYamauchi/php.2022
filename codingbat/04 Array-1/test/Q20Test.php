<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q20.php';

class Q20Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testswapEnds(array $nums, array $expected)
    {
        $target = new Q20();
        
        $result = $target->swapEnds($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'swapEnds([1, 2, 3, 4]) → [4, 2, 3, 1]' => [[1, 2, 3, 4], [4, 2, 3, 1]],
            'swapEnds([1, 2, 3]) → [3, 2, 1]' => [[1, 2, 3], [3, 2, 1]],
            'swapEnds([8, 6, 7, 9, 5]) → [5, 6, 7, 9, 8]' => [[8, 6, 7, 9, 5], [5, 6, 7, 9, 8]],
            'swapEnds([3, 1, 4, 1, 5, 9]) → [9, 1, 4, 1, 5, 3]' => [[3, 1, 4, 1, 5, 9], [9, 1, 4, 1, 5, 3]],
            'swapEnds([1, 2]) → [2, 1]' => [[1, 2], [2, 1]],
            'swapEnds([1]) → [1]' => [[1], [1]],
        ];
    }
}