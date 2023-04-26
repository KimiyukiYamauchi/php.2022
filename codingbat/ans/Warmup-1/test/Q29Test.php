<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q29.php';

class Q29Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testlastDigit(int $a, int $b, bool $expected)
    {
        $target = new Q29();
        
        $result = $target->lastDigit($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'lastDigit(7, 17) → true' => [7, 17, true],
            'lastDigit(6, 17) → false' => [6, 17, false],
            'lastDigit(3, 113) → true' => [3, 113, true],
            'lastDigit(114, 113) → false' => [114, 113, false],
            'lastDigit(114, 4) → true' => [114, 4, true],
            'lastDigit(10, 0) → true' => [10, 0, true],
            'lastDigit(11, 0) → false' => [11, 0, false],
        ];
    }
}