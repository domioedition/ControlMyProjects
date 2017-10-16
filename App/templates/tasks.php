<?php


include_once 'header.php';

foreach ($tasks as $task) {
//    var_dump($task);
    echo '<h3>' . $task->task_name . '</h3>';
    echo '<p>' . $task->task_description . '</p>';
    if (!empty($task->user_id_creator)) {
//        echo "Автор: " . $task->user_id_creator->name;
        // echo ' <a href="index.php?action=one&id=' . $task->id . '">See more</a>';
    } else {
        echo "Автор: NULL";
    }
    echo ' <a href="/task/one/' . $task->id . '">See more</a>';
}

include_once 'footer.php';
