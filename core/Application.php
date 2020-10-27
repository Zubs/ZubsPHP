<?php

namespace App\Core;

/**
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Application
{
	public Router $router;

	public function __construct()
	{
		$this->router = new Router();
	}
}

