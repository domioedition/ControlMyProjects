<?php
session_start();
include '../../autoload.php';


//print_r($_POST);



////Add new task
$task = new \App\Models\Task();

$task->user_id_creator = $_SESSION['user_id'];
$task->user_id_assignee = 0;
$task->task_name = $_POST['task_name'];
$task->task_description = $_POST['task_description'];
$task->task_date_creation = time();
$task->task_status = 0;

$task->insert();




//todo Сделать нормальный редирект.
header("Location: /../../index.php");
