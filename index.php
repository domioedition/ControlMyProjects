<?php
session_start();
//session_destroy();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: App/templates/login.html");
    exit;
}





require __DIR__ . '/autoload.php';

//require __DIR__ . '/vendor/autoload.php';


//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();



//$action = $_GET['action'];
//var_dump($action);

$controller = new App\Controllers\Task();
$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
$controller->action($action);