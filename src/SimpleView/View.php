<?php

namespace Morphable\SimpleView;

use \Morphable\SimpleView\Util;
use \Morphable\SimpleView\Data;
use \Morphable\SimpleView\Exception\ViewNotFound;

class View
{
    /**
     * Path to views folder
     *
     * @var string
     */
    private $base;

    /**
     * @var \Morphable\SimpleView\Data
     */
    private $data;

    /**
     * @param string
     * @param \Morphable\SimpleView\Data
     * @return self
     */
    public function __construct(string $base, Data $data)
    {
        $this->base = Util::trimSlash($base);
        $this->data = $data;
    }

    /**
     * @return \Morphable\SimpleView\Data
     */
    public function getData()
    {
        return $this->data->get();
    }

    /**
     * @param string
     * @return string
     */
    public function include(string $path = null)
    {
        $_fullPath = $this->base . Util::trimSlash($path);

        if (!file_exists($_fullPath)) {
            throw new ViewNotFound($path);
        }

        \ob_start();
        include $_fullPath;
        $content = \ob_get_contents();
        \ob_end_clean();

        return $content;
    }
}
