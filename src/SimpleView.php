<?php

namespace Morphable;

use \Morphable\SimpleView\Util;
use \Morphable\SimpleView\View;
use \Morphable\SimpleView\Data;

class SimpleView
{
    /**
     * @var string
     */
    private $base;

    /**
     * @param string path to views
     * @return self
     */
    public function __construct(string $base)
    {
        $this->base = util::trimSlash($base);
    }

    /**
     * @param string path to first view
     * @param array data you want to show
     * @return string view
     */
    public function serve(string $path, array $data = [])
    {
        return (new View($this->base, new Data($data)))->include(util::trimSlash($path));
    }
}
