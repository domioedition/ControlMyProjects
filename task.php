<?php
require_once 'autoload.php';


$controller = new App\Controllers\Task();
$x = $controller->action('Task');
var_dump($x);
?>
