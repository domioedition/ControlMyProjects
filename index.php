<?php
//session_start();
//session_destroy();
//if (!isset($_SESSION['user_logged_in'])) {
//    header("Location: App/templates/login.html");
//    exit;
//}
require __DIR__ . '/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// 100% working code
//$controller = new \App\Controllers\ControllerTask();
//$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
//var_dump($action);
//$controller->action($action);


$params = null;

$request = $_SERVER['REQUEST_URI'];
$splits = explode('/', trim($request, '/'));
$controller = !empty($splits[0]) ? 'Controller' . ucfirst($splits[0]) : 'ControllerDashboard';
$action = !empty($splits[1]) ? 'action' . ucfirst($splits[1]) : 'actionIndex';
if (!empty($splits[2])) {
    $params = $splits[2];
}
//
// var_dump($params);
// var_dump($controller);
// var_dump($action);


if ($controller == 'ControllerDashboard') {
    $ctrl = new \App\Controllers\ControllerDashboard();
} elseif ($controller == 'ControllerProject') {
    $ctrl = new \App\Controllers\ControllerProject();
} elseif ($controller == 'ControllerTask') {
    $ctrl = new \App\Controllers\ControllerTask($params);
} elseif ($controller == 'ControllerComment') {
	$ctrl = new \App\Controllers\ControllerComment();
} elseif ($controller == 'ControllerUser') {
    $ctrl = new \App\Controllers\ControllerUser();
} elseif ($controller == 'ControllerNews') {
    echo $controller;
}else{
    die("Unknown controller");
}
//echo $controller;
$ctrl->action($action);