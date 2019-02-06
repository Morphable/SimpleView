<?php

use \Morphable\SimpleView;
use \Morphable\SimpleView\Data;
use \Morphable\SimpleView\View;

class SimpleViewTest extends \PHPUnit\Framework\TestCase
{
    public function testSimpleView()
    {
        $instance = new SimpleView(__DIR__ . '/views');

        echo $instance->serve("home.php", [
            "title" => "hello world"
        ]);

        die;
    }
}
