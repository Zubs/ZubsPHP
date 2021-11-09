<?php

namespace App\Core;

/**
 * Class Application
 *
 * @author Zubs <zubairidrisaweda@gmail.com>
 * @package App\Core
 */
class Application
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $App;

    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$App = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}
