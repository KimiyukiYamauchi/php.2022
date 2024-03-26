<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q18.php';

class Q18Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testnTwice(string $str, int $index, string $expected)
    {
        $target = new Q18();
        
        $result = $target->nTwice($str, $index);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'twoChar("java", 0) → "ja"' => ['java', 0, 'ja'],
            'twoChar("java", 2) → "va"' => ['java', 2, 'va'],
            'twoChar("java", 3) → "ja"' => ['java', 3, 'ja'],
            'twoChar("java", 4) → "ja"' => ['java', 4, 'ja'],
            'twoChar("java", -1) → "ja"' => ['java', -1, 'ja'],
            'twoChar("Hello", 0) → "He"' => ['Hello', 0, 'He'],
            'twoChar("Hello", 1) → "el"' => ['Hello', 1, 'el'],
            'twoChar("Hello", 99) → "He"' => ['Hello', 99, 'He'],
            'twoChar("Hello", 3) → "lo"' => ['Hello', 3, 'lo'],
            'twoChar("Hello", 4) → "He"' => ['Hello', 4, 'He'],
            'twoChar("Hello", 5) → "He"' => ['Hello', 5, 'He'],
            'twoChar("Hello", -7) → "He"' => ['Hello', -7, 'He'],
            'twoChar("Hello", 6) → "He"' => ['Hello', 6, 'He'],
            'twoChar("Hello", -1) → "He"' => ['Hello', -1, 'He'],
            'twoChar("yay", 0) → "ya"' => ['yay', 0, 'ya'],
        ];
    }
}