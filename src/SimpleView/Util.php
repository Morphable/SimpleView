<?php

namespace Morphable\SimpleView;

class Util
{
    /**
     * check os is windows
     * @return bool
     */
    public static function isWindows()
    {
        return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
    }

    /**
     * Normalize paths
     * @param string
     * @return string
     */
    public static function trimSlash(string $path)
    {
        if (preg_match('/\w\:/', $path) && self::isWindows()) {
            return trim(trim($path), '/');
        }

        return '/' . trim($path, '/');
    }
}
