<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q7.php';

class Q7Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnearHundred(int $n, bool $expected)
    {
        $target = new Q7();
        
        $result = $target->nearHundred($n);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'nearHundred(93) → true' => [93, true],
            'nearHundred(90) → true' => [90, true],
            'nearHundred(89) → false' => [89, false],
            'nearHundred(110) → true' => [110, true],
            'nearHundred(111) → false' => [111, false],
            'nearHundred(121) → false' => [121, false],
            'nearHundred(-101) → false' => [-101, false],
            'nearHundred(-209) → false' => [-209, false],
            'nearHundred(190) → true' => [190, true],
            'nearHundred(209) → true' => [209, true],
            'nearHundred(0) → false' => [0, false],
            'nearHundred(5) → false' => [5, false],
            'nearHundred(-50) → false' => [-50, false],
            'nearHundred(191) → true' => [191, true],
            'nearHundred(189) → false' => [189, false],
            'nearHundred(200) → true' => [200, true],
            'nearHundred(210) → true' => [210, true],
            'nearHundred(211) → false' => [211, false],
            'nearHundred(290) → false' => [290, false],
        ];
    }
}