<?php

include __DIR__.'/header.php';

?>

<a href="/task">Up..</a>

<?php


      echo '<h3>'.$task->task_name.'</h3>';
echo '<p>'.$task->task_description.'</p>';
echo '<p>Status: '.$task->task_status.'</p>';
echo '<p>Creator: '.$task->user_id_creator.'</p>';
echo '<p>Assignee: '.$task->user_id_assignee.'</p>';
include __DIR__.'/footer.php';

?>
