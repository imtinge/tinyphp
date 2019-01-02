<?php

spl_autoload_register(function ($class) {
    $file = str_replace("\\", "/", $class);
    require APP_PATH."/$file.php";
});
