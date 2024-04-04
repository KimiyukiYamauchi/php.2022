<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q19.php';

class Q19Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testplusTwo(array $nums1, array $nums2, array $expected)
    {
        $target = new Q19();
        
        $result = $target->plusTwo($nums1, $nums2);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'plusTwo([1, 2], [3, 4]) → [1, 2, 3, 4]' => [[1, 2], [3, 4], [1, 2, 3, 4]],
            'plusTwo([4, 4], [2, 2]) → [4, 4, 2, 2]' => [[4, 4], [2, 2], [4, 4, 2, 2]],
            'plusTwo([9, 2], [3, 4]) → [9, 2, 3, 4]' => [[9, 2], [3, 4], [9, 2, 3, 4]],
        ];
    }
}