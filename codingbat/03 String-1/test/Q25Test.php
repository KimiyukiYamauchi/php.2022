<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q25.php';

class Q25Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testlseeColor(string $str, string $expected)
    {
        $target = new Q25();
        
        $result = $target->seeColor($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'seeColor("redxx") → "red"' => ['redxx','red'],
            'seeColor("xxred") → ""' => ['xxred',''],
            'seeColor("blueTimes") → "blue"' => ['blueTimes','blue'],
            'seeColor("NoColor") → ""' => ['NoColor',''],
            'seeColor("red") → "red"' => ['red','red'],
            'seeColor("re") → ""' => ['re',''],
            'seeColor("blu") → ""' => ['blu',''],
            'seeColor("blue") → "blue"' => ['blue','blue'],
            'seeColor("a") → ""' => ['a',''],
            'seeColor("") → ""' => ['',''],
            'seeColor("xyzred") → ""' => ['xyzred',''],
        ];
    }
}