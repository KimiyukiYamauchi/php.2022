<?php

use PHPUnit\Framework\TestCase;
require_once 'src\Sample.php';

class SampleTest extends TestCase
{
    public function testHello()
    {
        $sample = new Sample();
        
        $result = $sample->hello();
        
        $this->assertEquals("Hello", $result);
    }
}