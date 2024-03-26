<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q17.php';

class Q17Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testhas271(array $nums, bool $expected)
    {
        $target = new Q17();
        
        $result = $target->has271($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'has271([1, 2, 7, 1]) → true' => [[1, 2, 7, 1], true],
            'has271([1, 2, 8, 1]) → false' => [[1, 2, 8, 1], false],
            'has271([2, 7, 1]) → true' => [[2, 7, 1], true],
            'has271([3, 8, 2]) → true' => [[3, 8, 2], true],
            'has271([2, 7, 3]) → true' => [[2, 7, 3], true],
            'has271([2, 7, 4]) → false' => [[2, 7, 4], false],
            'has271([2, 7, -1]) → true' => [[2, 7, -1], true],
            'has271([2, 7, -2]) → false' => [[2, 7, -2], false],
            'has271([4, 5, 3, 8, 0]) → true' => [[4, 5, 3, 8, 0], true],
            'has271([2, 7, 5, 10, 4]) → true' => [[2, 7, 5, 10, 4], true],
            'has271([2, 7, -2, 4, 9, 3]) → true' => [[2, 7, -2, 4, 9, 3], true],
            'has271([2, 7, 5, 10, 1]) → false' => [[2, 7, 5, 10, 1], false],
            'has271([2, 7, -2, 4, 10, 2]) → false' => [[2, 7, -2, 4, 10, 2], false],
            'has271([1, 1, 4, 9, 0]) → false' => [[1, 1, 4, 9, 0], false],
            'has271([1, 1, 4, 9, 4, 9, 2]) → true' => [[1, 1, 4, 9, 4, 9, 2], true],
        ];
    }
}