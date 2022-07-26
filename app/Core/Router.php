<?php
namespace App\Core;

class Router
{
    protected static array $paths=[];

    public static function start(): void
    {
        $routes = self::cleanRoute();

        if (self::$paths[$routes]) {
            $currentPath = self::$paths[$routes];
            if ($_SERVER['REQUEST_METHOD'] == $currentPath["method"]) {
                echo "Current class = ".$currentPath["controller"]." current action =".$currentPath["action"];
            }
            else {
                self::pageNotFound();
            }
        }
        else {
            self::pageNotFound();
        }

    }

    public static function get (string $path, array $controller) : void
    {
        self::addPath ($path, $controller, "GET");
    }

    public static function post (string $path, array $controller) : void
    {
        self::addPath ($path, $controller, "POST");
    }

    private static function addPath(string $path, array $controller, string $method) : void
    {
        if (!isset(self::$paths[$path])) {
            self::$paths[$path] = [
                "controller" => $controller[0],
                "action" => $controller[1] ?? "index",
                "method" => $method
            ];
        }
    }

    private static function cleanRoute(): string
    {
        return explode("?", $_SERVER['REQUEST_URI'])[0];
    }

    private static function pageNotFound(): void
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
//        header('Location:'.$host.'not-found');
        echo "Ну допустим 404";
    }
}