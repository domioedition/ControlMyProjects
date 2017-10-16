<?php
//session_start();
//session_destroy();
//if (!isset($_SESSION['user_logged_in'])) {
//    header("Location: App/templates/login.html");
//    exit;
//}
require __DIR__ . '/autoload.php';

// 100% working code
//$controller = new \App\Controllers\ControllerTask();
//$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
//var_dump($action);
//$controller->action($action);


$params = null;

$request = $_SERVER['REQUEST_URI'];
$splits = explode('/', trim($request, '/'));
//Какой сontroller использовать?
$controller = !empty($splits[0]) ? 'Controller' . ucfirst($splits[0]) : 'ControllerDashboard';
//Какой action использовать?
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
} elseif ($controller == 'ControllerUser') {
    $ctrl = new \App\Controllers\ControllerUser();
} elseif ($controller == 'ControllerNews') {
     $ctrl = new \App\Controllers\ControllerNews();
} elseif ($controller == 'ControllerNews') {
    echo $controller;
}else{
    die("Unknown controller");
}
//echo $controller;
$ctrl->action($action);


echo "<hr>";
die();
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

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';
var_dump($url);


if (is_array($url)) {
    $ctrl = $url[0];
} else {
    //todo сделать нормальный роутинг
    $ctrl = null;
}
//var_dump($ctrl);
switch ($ctrl) {
    case 'news' :
        $controller = new \App\Controllers\ControllerNews();
        break;
    case 'tasks' :
        $controller = new \App\Controllers\ControllerTask();
        break;
    default :
        $controller = new \App\Controllers\ControllerDashboard();
        break;
}


// 100% working code
//$controller = new \App\Controllers\Task();
//var_dump($controller);
$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
//var_dump($action);
$controller->action($action);
