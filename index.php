<?php
session_start();
//session_destroy();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: App/templates/login.html");
    exit;
}

require __DIR__ . '/autoload.php';
//die("ERR");

// set up composer autoloader
//require __DIR__ . '/vendor/autoload.php';


//Error handler
//Need to install and investigate
//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();


//$action = $_GET['action'];
//var_dump($action);


//print_r($_SERVER['REQUEST_URI']);
//$action = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
//
//if (count($action) == 1) {
//    echo "Dashboard page";
//    $controller = new App\Controllers\ControllerDashboard();
//    $action = 'Index';
//}
//
//if (count($action) == 2) {
//    if ($action[1] == 'projects') {
//        echo "projects controller page";
//        $controller = new App\Controllers\ControllerDashboard();
//        $action = 'Index';
//    }
//    if (($action[1] == 'tasks')) {
//        echo "Tasks controller page";
//        $controller = new App\Controllers\Task();
//        $action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
//    }
//}
//if(count($action) == 3){
//    if ($action[1] == 'projects') {
//        echo "Now we see current project";
//        echo "<br>Project: ".$action[2];
//        $controller = new App\Controllers\ControllerProject($action[2]);
//        $action = 'Index';
//    }
//    if ($action[1] == 'tasks') {
//        echo "Now we see current tasks";
//    }
//}


//var_dump($action);

//echo "<h1>Dashboard</h1>";
//
//if(!isset($project) || !isset($task)){
//    echo '<a href="index.php?project=1&tasks">Project 1</a><br>';
//    echo '<a href="index.php?project=2">Project 2</a><br>';
//    echo '<a href="index.php?project=3">Project 3</a><br>';
//    echo '<a href="index.php?project=4">Project 4</a><br>';
//}
//
//if(isset($_GET['project'])){
//    $project = $_GET['project'];
//    echo $project;
//}
//
//if(isset($_GET['project']) and isset($_GET['tasks'])){
//    $tasks = $_GET['tasks'];
//    $controller = new App\Controllers\Task();
//    $action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
//    $controller->action($action);
//}


// 100% working code
$controller = new App\Controllers\Task();
$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
$controller->action($action);


