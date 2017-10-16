<?php


require_once '../../autoload.php';

//print_r($_POST);

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $taskId = $_POST['task_id'];
    $taskStatus = $_POST['task_status'];


    $task = new \App\Models\ModelTask();
    $task->id = $taskId;
    $task->setTaskStatus($taskStatus);
    header('HTTP/1.1 302 Redirect');
    header('Location: /task/one/'.$taskId);
}
//
//header('HTTP/1.1 302 Redirect');
//header('Location: /index.php');