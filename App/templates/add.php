<?php
include '../../autoload.php';


//print_r($_POST);



////Add new news
$news = new \App\Models\News();
$news->title = $_POST['task_name'];
$news->lead = $_POST['task_description'];
$news->author_id = 1;
$news->insert();

//todo Сделать нормальный редирект.
header("Location: /controlmyprojects/");
echo "added";