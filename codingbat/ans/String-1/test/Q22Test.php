<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q22.php';

class Q22Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testlastChars(string $a, string $b, string $expected)
    {
        $target = new Q22();
        
        $result = $target->lastChars($a, $b);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'lastChars("last", "chars") → "ls"' => ['last', 'chars', 'ls'],
            'lastChars("yo", "java") → "ya"' => ['yo', 'java', 'ya'],
            'lastChars("hi", "") → "h@"' => ['hi', '', 'h@'],
            'lastChars("", "hello") → "@o"' => ['', 'hello', '@o'],
            'lastChars("", "") → "@@"' => ['', '', '@@'],
            'lastChars("kitten", "hi") → "ki"' => ['kitten', 'hi', 'ki'],
            'lastChars("k", "zip") → "kp"' => ['k', 'zip', 'kp'],
            'lastChars("kitten", "") → "k@"' => ['kitten', '', 'k@'],
            'lastChars("kitten", "zip") → "kp"' => ['kitten', 'zip', 'kp'],
        ];
    }
}