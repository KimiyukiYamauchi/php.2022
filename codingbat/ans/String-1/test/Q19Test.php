<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q19.php';

class Q19Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testtwoChar(string $str, string $expected)
    {
        $target = new Q19();
        
        $result = $target->twoChar($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'middleThree("Candy") → "and"' => ['Candy', 'and'],
            'middleThree("and") → "and"' => ['and', 'and'],
            'middleThree("solving") → "lvi"' => ['solving', 'lvi'],
            'middleThree("Hi yet Hi") → "yet"' => ['Hi yet Hi', 'yet'],
            'middleThree("java yet java") → "yet"' => ['java yet java', 'yet'],
            'middleThree("Chocolate") → "col"' => ['Chocolate', 'col'],
            'middleThree("XabcxyzabcX") → "xyz"' => ['XabcxyzabcX', 'xyz'],
        ];
    }
}