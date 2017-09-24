<pre>

<a href="create.php">Create Task</a>
<?php


foreach ($tasks as $task) {
    echo $task->id.") ";
    echo $task->task_name."<br>";
    echo "\t".$task->task_description."<br>";
//    var_dump($task->name);
    echo "\tCreator:".$task->user."<br>";
}

?>
