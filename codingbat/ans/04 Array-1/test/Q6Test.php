<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q6.php';

class Q6Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testrotateLeft3(array $nums, array $expected)
    {
        $target = new Q6();
        
        $result = $target->rotateLeft3($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'rotateLeft3([1, 2, 3]) → [2, 3, 1]' => [[1, 2, 3], [2, 3, 1]],
            'rotateLeft3([5, 11, 9]) → [11, 9, 5]' => [[5, 11, 9], [11, 9, 5]],
            'rotateLeft3([7, 0, 0]) → [0, 0, 7]' => [[7, 0, 0], [0, 0, 7]],
            'rotateLeft3([1, 2, 1]) → [2, 1, 1]' => [[1, 2, 1], [2, 1, 1]],
            'rotateLeft3([0, 0, 1]) → [0, 1, 0]' => [[0, 0, 1], [0, 1, 0]],
        ];
    }
}