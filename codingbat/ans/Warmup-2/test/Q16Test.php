<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q16.php';

class Q16Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testanoTriples(array $nums, bool $expected)
    {
        $target = new Q16();
        
        $result = $target->noTriples($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'noTriples([1, 1, 2, 2, 1]) → true' => [[1, 1, 2, 2, 1], true],
            'noTriples([1, 1, 2, 2, 2, 1]) → false' => [[1, 1, 2, 2, 2, 1], false],
            'noTriples([1, 1, 1, 2, 2, 2, 1]) → false' => [[1, 1, 1, 2, 2, 2, 1], false],
            'noTriples([1, 1, 2, 2, 1, 2, 1]) → true' => [[1, 1, 2, 2, 1, 2, 1], true],
            'noTriples([1, 2, 1]) → true' => [[1, 2, 1], true],
            'noTriples([1, 1, 1]) → false' => [[1, 1, 1], false],
            'noTriples([1, 1]) → true' => [[1, 1], true],
            'noTriples([1]) → true' => [[1], true],
            'noTriples([]) → true' => [[], true],
        ];
    }
}