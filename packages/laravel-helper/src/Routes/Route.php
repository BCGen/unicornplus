<?php

namespace Bcgen\LaravelHelper\Routes;

class Route
{
    public static function resource($route, $option = array())
    {
        Route::routerGenerator("resource", $route, $option);
    }

    public static function resources($routeList, $option = array())
    {
        Route::routersGenerator("resources", $routeList, $option);
    }

    public static function apiResources($routeList, $option = array())
    {
        Route::routersGenerator("apiResources", $routeList, $option);
    }

    private static function routersGenerator($function, $routeList, $option)
    {
        foreach ($routeList as $route) {
            $list[$route] = studly_case(str_singular(snake_case($route))) . 'Controller';
        }

        if (isset($option[0]) || gettype($option) === 'string') {
            $option = ['except' => $option];
        }

        $function = "Illuminate\Support\Facades\Route::$function";

        $function($list, $option);
    }

    private static function routerGenerator($function, $route, $option)
    {
        $controller = studly_case(str_singular(snake_case($route))) . 'Controller';

        if (isset($option[0]) || gettype($option) === 'string') {
            $option = ['except' => $option];
        }

        $function = "Illuminate\Support\Facades\Route::$function";

        $function($route, $controller, $option);
    }
}
