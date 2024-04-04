<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q11.php';

class Q11Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakeEnds(array $nums, array $expected)
    {
        $target = new Q11();
        
        $result = $target->makeEnds($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeEnds([1, 2, 3]) → [1, 3]' => [[1, 2, 3], [1, 3]],
            'makeEnds([1, 2, 3, 4]) → [1, 4]' => [[1, 2, 3, 4], [1, 4]],
            'makeEnds([7, 4, 6, 2]) → [7, 2]' => [[7, 4, 6, 2], [7, 2]],
            'makeEnds([1, 2, 2, 2, 2, 2, 2, 3]) → [1, 3]' => [[1, 2, 2, 2, 2, 2, 2, 3], [1, 3]],
            'makeEnds([7, 4]) → [7, 4]' => [[7, 4], [7, 4]],
            'makeEnds([7]) → [7, 7]' => [[7], [7, 7]],
            'makeEnds([5, 2, 9]) → [5, 9]' => [[5, 2, 9], [5, 9]],
            'makeEnds([2, 3, 4, 1]) → [2, 1]' => [[2, 3, 4, 1], [2, 1]],
        ];
    }
}