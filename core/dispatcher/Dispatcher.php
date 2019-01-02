<?php

namespace core\dispatcher;

abstract class Dispatcher
{
    abstract protected static function getInstance();

    public static function __callStatic($method, $args)
    {
        $instance = static::getInstance();

        if (method_exists($instance, 'init')) {
            call_user_func_array([$instance, 'init'], $args);
        }

        return call_user_func_array(array($instance, $method), $args);
    }

    protected static function newObject()
    {
        return new Static;
    }

    private function register()
    {
        return static::getInstance();
    }
}
