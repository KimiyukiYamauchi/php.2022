<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q25.php';

class Q25Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmake2(array $a, array $b, array $expected)
    {
        $target = new Q25();
        
        $result = $target->make2($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'smake2([4, 5], [1, 2, 3]) → [4, 5]	' => [[4, 5], [1, 2, 3], [4, 5]],
            'make2([4], [1, 2, 3]) → [4, 1]' => [[4], [1, 2, 3], [4, 1]],
            'make2([], [1, 2]) → [1, 2]' => [[], [1, 2], [1, 2]],
            'make2([1, 2], []) → [1, 2]' => [[1, 2], [], [1, 2]],
            'make2([3], [1, 2, 3]) → [3, 1]' => [[3], [1, 2, 3], [3, 1]],
            'make2([3], [1]) → [3, 1]' => [[3], [1], [3, 1]],
            'make2([3, 1, 4], []) → [3, 1]' => [[3, 1, 4], [], [3, 1]],
            'make2([1], [1]) → [1, 1]' => [[1], [1], [1, 1]],
            'make2([1, 2, 3], [7, 8]) → [1, 2]' => [[1, 2, 3], [7, 8], [1, 2]],
            'make2([7, 8], [1, 2, 3]) → [7, 8]' => [[7, 8], [1, 2, 3], [7, 8]],
            'make2([7], [1, 2, 3]) → [7, 1]' => [[7], [1, 2, 3], [7, 1]],
            'make2([5, 4], [2, 3, 7]) → [5, 4]' => [[5, 4], [2, 3, 7], [5, 4]],
        ];
    }
}