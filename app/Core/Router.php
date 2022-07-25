<?php
namespace App\Core;

class Router
{

    public static function start(): void
    {
        $routes = self::cleanRoute();
        print_r($routes);
    }

    /**
     * @return string
     */
    private static function cleanRoute(): string
    {
        return explode("?", $_SERVER['REQUEST_URI'])[0];
    }
}