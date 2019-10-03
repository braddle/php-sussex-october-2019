<?php
namespace Braddle;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $empty = new Stack();

        $this->assertTrue($empty->isEmpty());
    }

    public function testNotEmpty()
    {
        $one = new Stack();
        $one->bury("red");

        $this->assertFalse($one->isEmpty());
    }

    public function testEmptySizeZero()
    {
        $empty = new Stack();

        $this->assertEquals(0, $empty->size());
    }

    public function testThreeSize()
    {
        $three = new Stack();
        $three->bury("red");
        $three->bury("blue");
        $three->bury("green");

        $this->assertEquals(3, $three->size());
    }

    public function testUnbury()
    {
        $three = new Stack();
        $three->bury("red");
        $three->bury("blue");
        $three->bury("green");

        $this->assertEquals("green", $three->unbury());
        $this->assertEquals(2, $three->size());

        $this->assertEquals("blue", $three->unbury());
        $this->assertEquals(1, $three->size());

        $this->assertEquals("red", $three->unbury());
        $this->assertEquals(0, $three->size());
    }


}
