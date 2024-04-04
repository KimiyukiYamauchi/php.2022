<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q9.php';

class Q9Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testsum2(array $nums, int $expected)
    {
        $target = new Q9();
        
        $result = $target->sum2($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'sum2([1, 2, 3]) → 3' => [[1, 2, 3], 3],
            'sum2([1, 1]) → 2' => [[1, 1], 2],
            'sum2([1, 1, 1, 1]) → 2	' => [[1, 1, 1, 1], 2],
            'sum2([1, 2]) → 3' => [[1, 2], 3],
            'sum2([1]) → 1' => [[1], 1],
            'sum2([]) → 0' => [[], 0],
            'sum2([4, 5, 6]) → 9' => [[4, 5, 6], 9],
            'sum2([4]) → 4	' => [[4], 4],
        ];
    }
}