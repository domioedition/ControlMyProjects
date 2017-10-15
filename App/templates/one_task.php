<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="../">Up..</a>

<?php


//$arr = get_defined_vars();


//print_r($arr);



echo '<h3>'.$task->task_name.'</h3>';
echo '<p>'.$task->task_description.'</p>';
echo '<p>Status: '.$task->task_status.'</p>';
echo '<p>Creator: '.$task->user_id_creator.'</p>';
echo '<p>Assignee: '.$task->user_id_assignee.'</p>';
?>
</body>
</html>

