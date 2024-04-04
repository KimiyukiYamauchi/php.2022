<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q18.php';

class Q18Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnmakeMiddle(array $nums, array $expected)
    {
        $target = new Q18();
        
        $result = $target->makeMiddle($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeMiddle([1, 2, 3, 4]) → [2, 3]' => [[1, 2, 3, 4], [2, 3]],
            'makeMiddle([7, 1, 2, 3, 4, 9]) → [2, 3]' => [[7, 1, 2, 3, 4, 9], [2, 3]],
            'makeMiddle([1, 2]) → [1, 2]' => [[1, 2], [1, 2]],
            'makeMiddle([5, 2, 4, 7]) → [2, 4]' => [[5, 2, 4, 7], [2, 4]],
            'makeMiddle([9, 0, 4, 3, 9, 1]) → [4, 3]' => [[9, 0, 4, 3, 9, 1], [4, 3]],
        ];
    }
}