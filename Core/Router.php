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
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function layoutContent() {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/app.php";
        return ob_get_clean();
    }

    public function renderOnlyView(string $view) {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }

    public function renderView(string $view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);

        return str_replace('{{content}}', $viewContent, $layoutContent);
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->setStatusCode(404);
            return $this->renderView('404');
        }

        if (is_string($callback)) return $this->renderView($callback);

        return call_user_func($callback);
    }
}

// dirname(__DIR__);
