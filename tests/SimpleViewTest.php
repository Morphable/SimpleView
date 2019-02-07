<?php

use \Morphable\SimpleView;
use \Morphable\SimpleView\Data;
use \Morphable\SimpleView\View;
use \Morphable\SimpleView\Exception\ViewNotFound;

class SimpleViewTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleView()
    {
        $instance = new SimpleView(__DIR__ . '/views');

        $result = $instance->serve("home.php", [
            "title" => "hello world"
        ]);

        $shouldBe = "hello worldtest\ntest\n";
        $this->assertSame($shouldBe, $result);

        try {
            $instance->serve('not-exisisting.file');
            $this->assertTrue(false);
        } catch (\Morphable\SimpleView\Exception\ViewNotFound $e) {
            $this->assertTrue(true);
        }
    }
}
