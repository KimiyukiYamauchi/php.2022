<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q1.php';

class Q1Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testhelloName(string $name, $expected)
    {
        $target = new Q1();
        
        $result = $target->helloName($name);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'helloName("Bob") → "Hello Bob!"' => ['Bob', 'Hello Bob!'],
            'helloName("Alice") → "Hello Alice!"' => ['Alice', 'Hello Alice!'],
            'helloName("X") → "Hello X!"' => ['X', 'Hello X!'],
            'helloName("Dolly") → "Hello Dolly!"' => ['Dolly', 'Hello Dolly!'],
            'helloName("Alpha") → "Hello Alpha!"' => ['Alpha', 'Hello Alpha!'],
            'helloName("Omega") → "Hello Omega!"' => ['Omega', 'Hello Omega!'],
            'helloName("Goodbye") → "Hello Goodbye!"' => ['Goodbye', 'Hello Goodbye!'],
            'helloName("ho ho ho") → "Hello ho ho ho!"' => ['ho ho ho', 'Hello ho ho ho!'],
            'helloName("xyz!") → "Hello xyz!!"' => ['xyz!', 'Hello xyz!!'],
            'helloName("Hello") → "Hello Hello!"' => ['Hello', 'Hello Hello!'],
        ];
    }
}