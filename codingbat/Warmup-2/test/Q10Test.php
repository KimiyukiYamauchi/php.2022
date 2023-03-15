<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q10.php';

class Q10Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testarray123(array $nums, bool $expected)
    {
        $target = new Q10();
        
        $result = $target->array123($nums);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'array123([1, 1, 2, 3, 1]) → true' => [[1, 1, 2, 3, 1], true],
            'array123([1, 1, 2, 4, 1]) → false' => [[1, 1, 2, 4, 1], false],
            'array123([1, 1, 2, 1, 2, 3]) → true' => [[1, 1, 2, 1, 2, 3], true],
            'array123([1, 1, 2, 1, 2, 1]) → false' => [[1, 1, 2, 1, 2, 1], false],
            'array123([1, 2, 3, 1, 2, 3]) → true' => [[1, 2, 3, 1, 2, 3], true],
            'array123([1, 2, 3]) → true' => [[1, 2, 3], true],
            'array123([1, 1, 1]) → false' => [[1, 1, 1], false],
            'array123([1, 2]) → false' => [[1, 2], false],
            'array123([1]) → false' => [[1], false],
            'array123([]) → false' => [[], false],
        ];
    }
}