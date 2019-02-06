<?php

namespace Morphable\SimpleView;

class Util
{
    /**
     * Normalize paths
     * @param string
     * @return string
     */
    public static function trimSlash(string $path)
    {
        return '/' . trim($path, '/');
    }
}
