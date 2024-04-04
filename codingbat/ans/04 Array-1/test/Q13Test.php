<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q13.php';

class Q13Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testno23(array $nums, bool $expected)
    {
        $target = new Q13();
        
        $result = $target->no23($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'no23([4, 5]) → true' => [[4, 5], true],
            'no23([4, 2]) → false' => [[4, 2], false],
            'no23([3, 5]) → false' => [[3, 5], false],
            'no23([1, 9]) → true' => [[1, 9], true],
            'no23([2, 9]) → false	' => [[2, 9], false],
            'no23([1, 3]) → false	' => [[1, 3], false],
            'no23([1, 1]) → true' => [[1, 1], true],
            'no23([2, 2]) → false' => [[2, 2], false],
            'no23([3, 3]) → false' => [[3, 3], false],
            'no23([7, 8]) → true' => [[7, 8], true],
        ];
    }
}