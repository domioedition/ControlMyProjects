<?php
require_once '../../autoload.php';

//print_r($_POST);



if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $taskId = $_POST['task_id'];
    $userIdAssignee = $_POST['user_assignee'];


    $task = new \App\Models\ModelTask();
    $task->id = $_POST['task_id'];
    $task->setAssign($userIdAssignee);
    header('HTTP/1.1 302 Redirect');
    header('Location: /task/one/'.$taskId);
}