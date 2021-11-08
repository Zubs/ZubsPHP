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
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');

        return $position === false ? $path : substr($path, 0, $position);
    }

    public function getMethod()
    {
        
    }
}