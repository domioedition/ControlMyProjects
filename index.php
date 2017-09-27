<?php
//session_start();
//if (!isset($_SESSION['user_id'])) {
//    header('Location: App/Login.php');
//    exit;
//}

require __DIR__ . '/autoload.php';


$controller = new \App\Controllers\News();
$action = (empty($_GET['action'])) ? 'Index' : $_GET['action'];
$controller->action($action);
//var_dump($controller);



////Add new news
//$news = new \App\Models\News();
//$news->title = "Amazon and Google clash over YouTube access";
//$news->lead = "Amazon and Google have clashed publicly after access to YouTube was pulled from one of the online retailer's devices.";
//$news->author_id = 1;
//$news->insert();


////Delete
//$news = new \App\Models\News();
//$news->delete($id);













//$view = new \App\View();
//$view->news = \App\Models\News::find_all();
//echo $view->display(__DIR__.'/App/templates/news.php');
//
//print_r($_SERVER['REQUEST_URI']);


//$front_controller = explode('/', $_SERVER['REQUEST_URI']);
//array_shift($front_controller);
//
//
//switch ($front_controller[0]) {
//    case 'news':
//        $controller = new \App\Controllers\News();
//        $action = $front_controller[1];
//        break;
//    case 'tasks':
//        $controller = new \App\Controllers\Tasks();
//        $action = $front_controller[1];
//        break;
//    case 'projects':
//        $controller = new \App\Controllers\Projects();
//        $action = $front_controller[1];
//        break;
//    default: $action = 'Index';
//
//}



//2 variant
//if(isset($_GET['action'])){
//    $action = $_GET['action'];
//}else{
//    $action = 'Index';
//}
//$controller->action($action);


//Add new user
//$user = new User();
//$user->name = "Lua";
//$user->email = "lua@mycompany.com";
//$user->rights = 1;
//$user->insert();

//Creating and addding new project to DB
//$project = new Projects();
//$project->project_name = "Test project";
//$project->project_description = "My first project in study mode";
//$project->project_active = 1;
//$project->project_creator = $_SESSION['user_id'];
//$project->project_date_creation = time();
//$project->insert();

//Creating new task
//$task = new \App\Models\Task();
//$task->user_id_creator = 1;
//$task->user_id_assignee = "none";
//$task->task_name = "Investigate task100";
//$task->task_description = "Find solution200";
//$task->task_creation_date = time();
//$task->insert();


//$s = \App\Singleton::instance();
//$s->counter = 1;
//var_dump($s);
//$s = \App\Singleton::instance();
//var_dump($s);

//$users = \App\Models\User::find_all();
//var_dump($users);
//unset($users);
