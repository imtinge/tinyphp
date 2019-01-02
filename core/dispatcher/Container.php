<?php

namespace core\dispatcher;

class Container extends Dispatcher
{
    public static $container = [];

    protected static function getInstance()
    {
        $class = get_called_class();

        if (!isset(self::$container[$class]) ||
            !self::$container[$class] instanceof $class) {
            self::$container[$class] = self::newObject();
        }
        return self::$container[$class];
    }
}
