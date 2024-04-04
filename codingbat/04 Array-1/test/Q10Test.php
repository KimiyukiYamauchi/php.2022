<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q10.php';

class Q10Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnonmiddleWay(array $a, array $b, array $expected)
    {
        $target = new Q10();
        
        $result = $target->middleWay($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'middleWay([1, 2, 3], [4, 5, 6]) → [2, 5]' => [[1, 2, 3], [4, 5, 6], [2, 5]],
            'middleWay([7, 7, 7], [3, 8, 0]) → [7, 8]	' => [[7, 7, 7], [3, 8, 0], [7, 8]],
            'middleWay([5, 2, 9], [1, 4, 5]) → [2, 4]' => [[5, 2, 9], [1, 4, 5], [2, 4]],
            'middleWay([1, 9, 7], [4, 8, 8]) → [9, 8]	' => [[1, 9, 7], [4, 8, 8], [9, 8]],
            'middleWay([1, 2, 3], [3, 1, 4]) → [2, 1]' => [[1, 2, 3], [3, 1, 4], [2, 1]],
            'middleWay([1, 2, 3], [4, 1, 1]) → [2, 1]' => [[1, 2, 3], [4, 1, 1], [2, 1]],
        ];
    }
}