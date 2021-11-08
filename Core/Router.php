<?php

namespace App\Core;

/**
 * Class Router
 *
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct()
    {
        $this->request = new Request() ;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();

        var_dump($path);
    }
}