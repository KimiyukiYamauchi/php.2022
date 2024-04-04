<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q22.php';

class Q22Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmaxTriple(array $nums, int $expected)
    {
        $target = new Q22();
        
        $result = $target->maxTriple($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'maxTriple([1, 2, 3]) → 3' => [[1, 2, 3], 3],
            'maxTriple([1, 5, 3]) → 5' => [[1, 5, 3], 5],
            'maxTriple([5, 2, 3]) → 5' => [[5, 2, 3], 5],
            'maxTriple([1, 2, 3, 1, 1]) → 3' => [[1, 2, 3, 1, 1], 3],
            'maxTriple([1, 7, 3, 1, 5]) → 5' => [[1, 7, 3, 1, 5], 5],
            'maxTriple([5, 1, 3, 7, 1]) → 5' => [[5, 1, 3, 7, 1], 5],
            'maxTriple([5, 1, 7, 3, 7, 8, 1]) → 5' => [[5, 1, 7, 3, 7, 8, 1], 5],
            'maxTriple([5, 1, 7, 9, 7, 8, 1]) → 9	' => [[5, 1, 7, 9, 7, 8, 1], 9],
            'maxTriple([5, 1, 7, 3, 7, 8, 9]) → 9' => [[5, 1, 7, 3, 7, 8, 9], 9],
            'maxTriple([2, 2, 5, 1, 1]) → 5' => [[2, 2, 5, 1, 1], 5],
        ];
    }
}