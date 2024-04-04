<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q21.php';

class Q21Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmidThree(array $nums, array $expected)
    {
        $target = new Q21();
        
        $result = $target->midThree($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'midThree([1, 2, 3, 4, 5]) → [2, 3, 4]' => [[1, 2, 3, 4, 5], [2, 3, 4]],
            'midThree([8, 6, 7, 5, 3, 0, 9]) → [7, 5, 3]' => [[8, 6, 7, 5, 3, 0, 9], [7, 5, 3]],
            'midThree([1, 2, 3]) → [1, 2, 3]' => [[1, 2, 3], [1, 2, 3]],
        ];
    }
}