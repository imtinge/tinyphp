<?php

namespace core;

use core\dispatcher\Container;

class Application extends Container
{
    public $boot;

    public function __construct()
    {
        $this->boot = \app\Bootstrap::register();
    }

    public function run()
    {
        foreach(get_class_methods($this->boot) as $func) {
            if (0 === strpos($func, 'init')) {
                call_user_func([$this->boot, $func]);
            }
        }
    }
}
