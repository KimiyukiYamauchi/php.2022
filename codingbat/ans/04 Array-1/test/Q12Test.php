<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q12.php';

class Q12Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testhas23(array $nums, bool $expected)
    {
        $target = new Q12();
        
        $result = $target->has23($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'has23([2, 5]) → true' => [[2, 5], true],
            'has23([4, 3]) → true' => [[4, 3], true],
            'has23([4, 5]) → false' => [[4, 5], false],
            'has23([2, 2]) → true' => [[2, 2], true],
            'has23([3, 2]) → true' => [[3, 2], true],
            'has23([3, 3]) → true' => [[3, 3], true],
            'has23([7, 7]) → false' => [[7, 7], false],
            'has23([3, 9]) → true' => [[3, 9], true],
            'has23([9, 5]) → false' => [[9, 5], false],
        ];
    }
}