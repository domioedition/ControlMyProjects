<?php
session_start();
include '../../autoload.php';
//adding new comment

//    print_r($_POST);
    $addComment = new \App\Models\ModelComment();




    $addComment->project_id = $_POST['project_id'];
    $addComment->task_id = $_POST['task_id'];
    $addComment->user_id = $_SESSION['user_id'];
    $addComment->content = $_POST['comment'];
    $addComment->date = time();
//    var_dump($addComment);
    $addComment->insert();







//todo Сделать нормальный редирект.
header("Location: /../../index.php?id=$addComment->task_id");
