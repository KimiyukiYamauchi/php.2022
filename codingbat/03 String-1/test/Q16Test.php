<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q16.php';

class Q16Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testendsLy(string $str, bool $expected)
    {
        $target = new Q16();
        
        $result = $target->endsLy($str);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'endsLy("oddly") → true' => ['oddly', true],
            'endsLy("y") → false' => ['y', false],
            'endsLy("oddy") → false' => ['oddy', false],
            'endsLy("oddl") → false' => ['oddl', false],
            'endsLy("olydd") → false' => ['olydd', false],
            'endsLy("ly") → true' => ['ly', true],
            'endsLy("") → false' => ['', false],
            'endsLy("falsey") → false' => ['falsey', false],
            'endsLy("evenly") → true' => ['evenly', true],
        ];
    }
}