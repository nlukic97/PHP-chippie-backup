<?php
namespace App\Core;

class App {

    public static $registry = [];

    public static function register($key, $value)
    {
            static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if(! array_key_exists($key, static::$registry)) {
            throw new \Exception('This key does not exist');
        }
        return static::$registry[$key];
    }
}