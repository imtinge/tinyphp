<?php

namespace core\dispatcher;

class Box extends Dispatcher
{
    protected static function getInstance()
    {
        return self::newObject();
    }
}
