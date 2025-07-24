<?php 
namespace Core;

class Router 
{
    public static $routes = [];
    public static $namedRoutes = [];
    public static $controllerContext = null;

    public static function controller($controller)
    {
        self::$controllerContext = $controller;
        return new class {
            public function group($callback) {
                $callback();
                \Core\Router::$controllerContext = null;
            }
        };
    }

    public static function add($method, $uri, $action)
    {
        $route = [
            'uri' => $uri,
            'action' => $action,
            'method' => strtoupper($method),
            'name' => null,
        ];
        self::$routes[] = $route;
        $index = array_key_last(self::$routes);
        return new class($index) {
            private $index;
            public function __construct($index) { $this->index = $index; }
            public function name($name) {
                \Core\Router::$routes[$this->index]['name'] = $name;
                \Core\Router::$namedRoutes[$name] = \Core\Router::$routes[$this->index];
                return $this;
            }
        };
    }

    public static function get($uri, $action)
    {
        $action = self::qualifyAction($action);
        return self::add('GET', $uri, $action);
    }

    public static function post($uri, $action)
    {
        $action = self::qualifyAction($action);
        return self::add('POST', $uri, $action);
    }

    public static function delete($uri, $action)
    {
        $action = self::qualifyAction($action);
        return self::add('DELETE', $uri, $action);
    }

    public static function put($uri, $action)
    {
        $action = self::qualifyAction($action);
        return self::add('PUT', $uri, $action);
    }

    public static function patch($uri, $action)
    {
        $action = self::qualifyAction($action);
        return self::add('PATCH', $uri, $action);
    }

    public static function route($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH); 
        foreach (self::$routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                if (is_callable($route['action'])) {
                    return call_user_func($route['action']);
                }
                if (is_array($route['action']) && count($route['action']) === 2) {
                    [$class, $method] = $route['action'];
                    if (class_exists($class) && method_exists($class, $method)) {
                        $controller = new $class();
                        return $controller->$method();
                    }
                }
                // Only require if it's a string (file path)
                if (is_string($route['action'])) {
                    return require base_path($route['action']);
                }
                // If none matched, abort
                self::abort();
            }
        }
        self::abort();
    }

    public static function name($name)
    {
        return self::$namedRoutes[$name]['uri'] ?? null;
    }

    protected static function qualifyAction($action)
    {
        if (self::$controllerContext && is_string($action)) {
            return [self::$controllerContext, $action];
        }
        return $action;
    }

    protected static function abort($code = 404)
    {
        http_response_code($code);
        require base_path("resources/views/errors/{$code}.php");
        die();
    }
}