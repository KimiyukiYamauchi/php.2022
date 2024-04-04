<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q15.php';

class Q15Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testfix23(array $nums, array $expected)
    {
        $target = new Q15();
        
        $result = $target->fix23($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'fix23([1, 2, 3]) → [1, 2, 0]' => [[1, 2, 3], [1, 2, 0]],
            'fix23([2, 3, 5]) → [2, 0, 5]' => [[2, 3, 5], [2, 0, 5]],
            'fix23([1, 2, 1]) → [1, 2, 1]' => [[1, 2, 1], [1, 2, 1]],
            'fix23([3, 2, 1]) → [3, 2, 1]' => [[3, 2, 1], [3, 2, 1]],
            'fix23([2, 2, 3]) → [2, 2, 0]' => [[2, 2, 3],[2, 2, 0]],
            'fix23([2, 3, 3]) → [2, 0, 3]' => [[2, 3, 3], [2, 0, 3]],
        ];
    }
}