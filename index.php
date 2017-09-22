<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: App/Login.php');
    exit;
}

require __DIR__ . '/autoload.php';

//include __DIR__.'/App/templates/index.php';


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
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12"><h2>Dashboard</h2>
            <?php
                        $user_name = $_SESSION['user_name'];
                        echo 'Welcome <code>' . $user_name . '</code>. Now you can manage your projects. ';
                        echo "<a href='App/login.php?logout'>Logout</a>";
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-4"><h4>My projects</h4>
                        <?php

                        $projects = \App\Models\Projects::find_all();
                        foreach ($projects as $k=>$project) {
                            $name = $project->getName();
                            $link = $project->getId();
                            echo '<a href="'.$link.'">'.$name.'</a><br>';
                        }

                        ?>
        </div>
        <div class="col-8">
            <?php




            ?>


        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
