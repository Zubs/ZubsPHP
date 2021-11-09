<?php

namespace App\Core;

/**
 * Class Request
 *
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Request
{
    /**
     * Get request path
     * @return string Request path.
     */
    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');

        return $position === false ? $path : substr($path, 0, $position);
    }

    /**
     * Get request method
     * @return string Request method
     */
    public function getMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
