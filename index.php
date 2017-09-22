<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: App/Login.php');
    exit;
}

require __DIR__ . '/autoload.php';

include __DIR__.'/App/templates/index.php';


use App\Models\User;
use App\Models\Projects;



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
?>