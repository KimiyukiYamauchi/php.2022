<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q20.php';

class Q20Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testloneTeen(int $a, int $b, bool $expected)
    {
        $target = new Q20();
        
        $result = $target->loneTeen($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'loneTeen(13, 99) → true' => [13, 99, true],
            'loneTeen(21, 19) → true' => [21, 19, true],
            'loneTeen(13, 13) → false' => [13, 13, false],
            'loneTeen(14, 20) → true' => [14, 20, true],
            'loneTeen(20, 15) → true' => [20, 15, true],
            'loneTeen(16, 17) → false' => [16, 17, false],
            'loneTeen(16, 9) → true' => [16, 9, true],
            'loneTeen(16, 18) → false' => [16, 18, false],
            'loneTeen(13, 19) → false' => [13, 19, false],
            'loneTeen(13, 20) → true' => [13, 20, true],
            'loneTeen(6, 18) → true' => [6, 18, true],
            'loneTeen(99, 13) → true' => [99, 13, true],
            'loneTeen(99, 99) → false' => [99, 99, false],
        ];
    }
}