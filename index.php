<?php
//session_start();
//if (!isset($_SESSION['user_id'])) {
//    header('Location: App/Login.php');
//    exit;
//}

require __DIR__ . '/autoload.php';


$controller = new \App\Controllers\Task();
$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
$controller->action($action);