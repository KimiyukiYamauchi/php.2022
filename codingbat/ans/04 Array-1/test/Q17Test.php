<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q17.php';

class Q17Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnbiggerTwo(array $nums1, array $nums2, array $expected)
    {
        $target = new Q17();
        
        $result = $target->biggerTwo($nums1, $nums2);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'biggerTwo([1, 2], [3, 4]) → [3, 4]' => [[1, 2], [3, 4], [3, 4]],
            'biggerTwo([3, 4], [1, 2]) → [3, 4]	' => [[3, 4], [1, 2], [3, 4]],
            'biggerTwo([1, 1], [1, 2]) → [1, 2]	' => [[1, 1], [1, 2], [1, 2]],
            'biggerTwo([2, 1], [1, 1]) → [2, 1]	' => [[2, 1], [1, 1], [2, 1]],
            'biggerTwo([2, 2], [1, 3]) → [2, 2]' => [[2, 2], [1, 3], [2, 2]],
            'biggerTwo([1, 3], [2, 2]) → [1, 3]' => [[1, 3], [2, 2], [1, 3]],
            'biggerTwo([6, 7], [3, 1]) → [6, 7]' => [[6, 7], [3, 1], [6, 7]],
        ];
    }
}