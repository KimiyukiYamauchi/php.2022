<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q4.php';

class Q4Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testcommonEnd(array $a, array $b, bool $expected)
    {
        $target = new Q4();
        
        $result = $target->commonEnd($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'commonEnd([1, 2, 3], [7, 3]) → true' => [[1, 2, 3], [7, 3], true],
            'commonEnd([1, 2, 3], [7, 3, 2]) → false' => [[1, 2, 3], [7, 3, 2], false],
            'commonEnd([1, 2, 3], [1, 3]) → true' => [[1, 2, 3], [1, 3], true],
            'commonEnd([1, 2, 3], [1]) → true' => [[1, 2, 3], [1], true],
            'commonEnd([1, 2, 3], [2]) → false' => [[1, 2, 3], [2], false],
        ];
    }
}