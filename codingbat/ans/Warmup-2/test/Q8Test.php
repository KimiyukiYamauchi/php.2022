<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q8.php';

class Q8Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testarrayCount9(array $nums, int $expected)
    {
        $target = new Q8();
        
        $result = $target->arrayCount9($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'arrayCount9([1, 2, 9]) → 1' => [[1, 2, 9], 1],
            'arrayCount9([1, 9, 9]) → 2' => [[1, 9, 9], 2],
            'arrayCount9([1, 9, 9, 3, 9]) → 3' => [[1, 9, 9, 3, 9], 3],
            'arrayCount9(arrayCount9([1, 2, 3]) → 0' => [[1, 2, 3], 0],
            'arrayCount9([]) → 0' => [[], 0],
            'arrayCount9([4, 2, 4, 3, 1]) → 0' => [[4, 2, 4, 3, 1], 0],
            'arrayCount9([9, 2, 4, 3, 1]) → 1' => [[9, 2, 4, 3, 1], 1],
        ];
    }
}