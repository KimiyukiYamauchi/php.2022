<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q24.php';

class Q24Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testunlucky1(array $nums, bool $expected)
    {
        $target = new Q24();
        
        $result = $target->unlucky1($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'unlucky1([1, 3, 4, 5]) → true' => [[1, 3, 4, 5], true],
            'unlucky1([2, 1, 3, 4, 5]) → true' => [[2, 1, 3, 4, 5], true],
            'unlucky1([1, 1, 1]) → false' => [[1, 1, 1],false],
            'unlucky1([1, 3, 1]) → true' => [[1, 3, 1],true],
            'unlucky1([1, 1, 3]) → true' => [[1, 1, 3],true],
            'unlucky1([1, 2, 3]) → false' => [[1, 2, 3],false],
            'unlucky1([3, 3, 3]) → false' => [[3, 3, 3],false],
            'unlucky1(unlucky1([1, 3]) → true' => [[1, 3],true],
            'unlucky1([1, 4]) → false' => [[1, 4],false],
            'unlucky1([1]) → false' => [[1],false],
            'unlucky1([]) → false' => [[],false],
            'unlucky1([1, 1, 1, 3, 1]) → false' => [[1, 1, 1, 3, 1],false],
            'unlucky1([1, 1, 3, 1, 1]) → true' => [[1, 1, 3, 1, 1],true],
            'unlucky1([1, 1, 1, 1, 3]) → true' => [[1, 1, 1, 1, 3],true],
            'unlucky1([1, 4, 1, 5]) → false' => [[1, 4, 1, 5],false],
            'unlucky1([1, 1, 2, 3]) → false' => [[1, 1, 2, 3],false],
            'unlucky1([2, 3, 2, 1]) → false' => [[2, 3, 2, 1],false],
            'unlucky1([2, 3, 1, 3]) → true' => [[2, 3, 1, 3],true],
            'unlucky1([1, 2, 3, 4, 1, 3]) → true' => [[1, 2, 3, 4, 1, 3],true],
        ];
    }
}