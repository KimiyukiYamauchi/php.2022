<?php

use phpDocumentor\Reflection\PseudoTypes\False_;
use PHPUnit\Framework\TestCase;
require_once 'src\Q3.php';

class Q3Test extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testmakeTags(string $tag, string $word, string $expected)
    {
        $target = new Q3();
        
        $result = $target->makeTags($tag, $word);
        
        $this->assertEquals($expected, $result);
    }

    public function additionProvider(): array
    {
        return [
            'makeTags("i", "Yay") → "<i>Yay</i>"' => ['i', 'Yay', '<i>Yay</i>'],
            'makeTags("i", "Hello") → "<i>Hello</i>"' => ['i', 'Hello', '<i>Hello</i>'],
            'makeTags("cite", "Yay") → "<cite>Yay</cite>"' => ['cite', 'Yay', '<cite>Yay</cite>'],
            'makeTags("address", "here") → "<address>here</address>"' => ['address', 'here', '<address>here</address>'],
            'makeTags("body", "Heart") → "<body>Heart</body>"' => ['body', 'Heart', '<body>Heart</body>'],
            'makeTags("i", "i") → "<i>i</i>"' => ['i', 'i', '<i>i</i>'],
            'makeTags("i", "") → "<i></i>"' => ['i', '', '<i></i>'],
        ];
    }
}