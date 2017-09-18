<?php

// __autoload Подключаем файлы с классом
// spl_autoload_register(function($className){
// 	$className = str_replace('\\', '/', $className);
// 	$path = __DIR__.'/'.$className.'.php';
// 	require $path;
// });


function __autoload($class)
{
	$path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
	require $path;
}
