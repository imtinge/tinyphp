<?php

namespace app;

use core\dispatcher\Container;

class Bootstrap extends Container
{
    public function initConst()
    {
        echo 'Bootstrap : 1'.PHP_EOL;
    }

    public function initHelper()
    {
        echo 'Bootstrap : 2'.PHP_EOL;
    }
}
