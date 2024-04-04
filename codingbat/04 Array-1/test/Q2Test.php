<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q2.php';

class Q2Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testsameFirstLast($nums, $expected)
    {
        $target = new Q2();
        
        $result = $target->sameFirstLast($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'sameFirstLast([1, 2, 3]) → false' => [[1, 2, 3], false],
            'sameFirstLast([1, 2, 3, 1]) → true' => [[1, 2, 3, 1], true],
            'sameFirstLast([1, 2, 1]) → true' => [[1, 2, 1], true],
            'sameFirstLast([7]) → true' => [[7], true],
            'sameFirstLast([1, 2, 3, 4, 5, 1]) → true' => [[1, 2, 3, 4, 5, 1], true],
            'sameFirstLast([1, 2, 3, 4, 5, 13]) → false' => [[1, 2, 3, 4, 5, 13], false],
            'sameFirstLast([13, 2, 3, 4, 5, 13]) → true' => [[13, 2, 3, 4, 5, 13], true],
            'sameFirstLast([7, 7]) → true' => [[7, 7], true],
        ];
    }
}