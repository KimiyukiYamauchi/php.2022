<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q9.php';

class Q9Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testarrayFront9(array $nums, bool $expected)
    {
        $target = new Q9();
        
        $result = $target->arrayFront9($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'arrayFront9([1, 2, 9, 3, 4]) → true' => [[1, 2, 9, 3, 4], true],
            'arrayFront9([1, 2, 3, 4, 9]) → false' => [[1, 2, 3, 4, 9], false],
            'arrayFront9([1, 2, 3, 4, 5]) → false' => [[1, 2, 3, 4, 5], false],
            'arrayFront9([9, 2, 3]) → true' => [[9, 2, 3], true],
            'arrayFront9([1, 9, 9]) → true' => [[1, 9, 9], true],
            'arrayFront9([1, 2, 3]) → false' => [[1, 2, 3], false],
            'arrayFront9([1, 9]) → true' => [[1, 9], true],
            'arrayFront9([5, 5]) → false' => [[5, 5], false],
            'arrayFront9([2]) → false' => [[2], false],
            'arrayFront9([9]) → true' => [[9], true],
            'arrayFront9([]) → false' => [[], false],
            'arrayFront9([3, 9, 2, 3, 3]) → true' => [[3, 9, 2, 3, 3], true],
        ];
    }
}