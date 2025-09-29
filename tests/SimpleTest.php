<?php

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testBasicAssertion()
    {
        $this->assertTrue(true);
    }
    
    public function testMath()
    {
        $this->assertEquals(4, 2 + 2);
    }
    
    public function testString()
    {
        $this->assertStringContainsString('Hello', 'Hello World');
    }
}