<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q15.php';

class Q15Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testarray667(array $nums, int $expected)
    {
        $target = new Q15();
        
        $result = $target->array667($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'array667([6, 6, 2]) → 1' => [[6, 6, 2], 1],
            'array667([6, 6, 2, 6]) → 1' => [[6, 6, 2, 6], 1],
            'array667([6, 7, 2, 6]) → 1' => [[6, 7, 2, 6], 1],
            'array667([6, 6, 2, 6, 7]) → 2' => [[6, 6, 2, 6, 7], 2],
            'array667([1, 6, 3]) → 0' => [[1, 6, 3], 0],
            'array667([6, 1]) → 0' => [[6, 1], 0],
            'array667([]) → 0' => [[], 0],
            'array667([3, 6, 7, 6]) → 1' => [[3, 6, 7, 6], 1],
            'array667([3, 6, 6, 7]) → 2' => [[3, 6, 6, 7], 2],
            'array667([6, 3, 6, 6]) → 1' => [[6, 3, 6, 6], 1],
            'array667([6, 7, 6, 6]) → 2' => [[6, 7, 6, 6], 2],
            'array667([1, 2, 3, 5, 6]) → 0' => [[1, 2, 3, 5, 6], 0],
            'array667([1, 2, 3, 6, 6]) → 1' => [[1, 2, 3, 6, 6], 1],
        ];
    }
}