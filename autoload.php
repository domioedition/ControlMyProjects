<?php

spl_autoload_register(function($className){
    $className = str_replace('\\', '/', $className);
    $path = __DIR__.'/'.$className.'.php';
    require $path;
});