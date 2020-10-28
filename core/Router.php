<?php

namespace App\Core;

/**
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Router
{
	protected array $routes = [];

	public function get($route, $callback)
	{
		$this->routes['get'][$route] = $callback;
	}

	public function resolve($value='')
	{
		var_dump($_SERVER['REQUEST_URI']);
	}
}
