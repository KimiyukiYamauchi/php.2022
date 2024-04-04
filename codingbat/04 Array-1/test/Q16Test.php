<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q16.php';

class Q16Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function teststart1(array $nums1, array $nums2, int $expected)
    {
        $target = new Q16();
        
        $result = $target->start1($nums1, $nums2);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'start1([1, 2, 3], [1, 3]) → 2' => [[1, 2, 3], [1, 3], 2],
            'start1([7, 2, 3], [1]) → 1' => [[7, 2, 3], [1], 1],
            'start1([1, 2], []) → 1' => [[1, 2], [], 1],
            'start1([], [1, 2]) → 1' => [[],[1, 2], 1],
            'start1([7], []) → 0' => [[7], [], 0],
            'start1([7], [1]) → 1' => [[7], [1], 1],
            'start1([1], [1]) → 2' => [[1], [1], 2],
            'start1([7], [8]) → 0' => [[7], [8], 0],
            'start1([], []) → 0' => [[], [], 0],
            'start1([1, 3], [1]) → 2' => [[1, 3], [1], 2],
        ];
    }
}