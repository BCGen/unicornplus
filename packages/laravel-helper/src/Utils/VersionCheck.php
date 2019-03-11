<?php

namespace Bcgen\LaravelHelper\Utils;

use \DB;

class VersionCheck
{
    static function dataBase() {
        $results = DB::select(DB::raw("select version()"));
        return $results[0]->{'version()'};
    }

    static function laravel() {
        return app()::VERSION;
    }

    static function all() {
        return [
            'database' => static::dataBase(),
            'laravel' => static::laravel(),
            'php' => phpversion(),
            'php_ini' => ini_get_all()
        ];
    }
}
