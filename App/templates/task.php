<?php


if(!is_object($task)){
    die('Unknown task');
}


$taskId = $task->id;
$taskName = $task->task_name;
$taskDescription = $task->task_description;
$taskStatus = $task->task_status;
$taskCreator = $task->user_id_creator;
$taskAssignee = $task->user_id_assignee;
$taskDateCreation = $task->task_date_creation;

include_once 'header.php';


//Здесь выводим переменную comments
//var_dump($comments);
?>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header"><?php echo $taskName; ?></h2>
    </div>
    <!-- /.col-lg-12 -->
</div>

<div class="row">
    <div class="col-lg-9">

        <div class="panel panel-success">
            <div class="panel-heading">
                Task information
            </div>
            <div class="panel-body">
                Assigned to <?php echo $taskAssignee; ?>
                <?php
                echo '<h3>' . $taskName . '</h3>';
                echo '<p>' . $taskDescription . '</p>';
                echo '<p>Task creator: <code>' . $taskCreator . '</code><br></p>';
                echo '<p>Task assignee: <code>' . $taskAssignee . '</code><br></p>';
                echo '<p><small>Date creation: ' . date("d/m/Y H:i", $taskDateCreation) . '</small></p>';
                echo '<p><small>Date update: ' . date("d/m/Y H:i", $taskDateCreation) . '</small></p>';
                echo '<p>Task status: ' . $taskStatus . '</p>';
                echo '<a href=/task/delete/' . $taskId . '><button type="button" class="btn btn-danger" onclick="return confirm(\'Вы действительно хотите удалить эту запись?\');">Delete</button></a>';
                ?>
            </div>
        </div>


    </div>
    <div class="col-lg-3">
        <div class="panel panel-success">
            <div class="panel-heading">
                Control
            </div>
            <div class="panel-body">

                <form action="/App/templates/task_assign.php" method="post">
                    <label>Assign</label>
                    <select class="form-control" name="user_assignee">
                        <?php

                        $users = \App\Models\ModelUser::findAll();
                        foreach ($users as $user) {
                            echo '<option value="' . $user->id . '">' . $user->name . ' - ' . $user->email . '</option>';
                        }
                        ?>
                    </select>
                    <input type="text" name="task_id" value="<?php echo $taskId; ?>" hidden><br>
                    <button type="submit" class="btn btn-success btn-block">Assign</button>
                </form>
                <form action="/App/templates/task_change_status.php" method="post">
                    <input type="text" name="task_id" value="<?php echo $taskId; ?>" hidden>
                    <label>Change status</label>
                    <select class="form-control" name="task_status">
                        <option
                                value="0" <?php if ($task->getTaskStatus() == 0) echo "selected='selected'"; ?>>
                            To Do
                        </option>
                        <option
                                value="1" <?php if ($task->getTaskStatus() == 1) echo "selected='selected'"; ?>>
                            In progress
                        </option>
                        <option
                                value="2" <?php if ($task->getTaskStatus() == 2) echo "selected='selected'"; ?>>
                            Hold
                        </option>
                        <option
                                value="3" <?php if ($task->getTaskStatus() == 3) echo "selected='selected'"; ?>>
                            Review
                        </option>
                        <option
                                value="4" <?php if ($task->getTaskStatus() == 4) echo "selected='selected'"; ?>>
                            Ready for Acceptance
                        </option>
                        <option
                                value="5" <?php if ($task->getTaskStatus() == 5) echo "selected='selected'"; ?>>
                            Done
                        </option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-success btn-block">Change status</button>
                </form>


            </div>
        </div>


    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Comments
            </div>
            <div class="panel-body">
                <?php


                // TODO chqnge project id from default
                $projectId = 1;
                $comments = new \App\Controllers\ControllerComment();
                // $comments->
                // $all_comments = $comments->findAll();
//                $all_comments = $comments->showAllComments($projectId, $taskId);
                if (empty($all_comments)) {
                    echo "0 comments";
                } else {
                    foreach ($all_comments as $comment) {
                        $date = date('d-m-Y H:i', $comment->date);
                        echo '<p class="text-info"><code>' . $comment->user->name . '</code> added a comment - ' . $date . '</p>';
                        echo '<p>' . nl2br($comment->content) . '</p>';
                        echo '<p class="text-right"><a href="#">Update</a> | <a href="#">Delete</a></p>';
                        echo '<hr>';
                    }
                }
                ?>
            </div>
            <div class="panel-footer">
                <form role="form" action="/comment/add" method="post">
                    <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" rows="3" name="comment"></textarea>
                        <input type="text" name="project_id" value="<?php echo $projectId; ?>" hidden>
                        <input type="text" name="task_id" value="<?php echo $taskId; ?>" hidden>
                    </div>
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>

</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<?php
include_once 'footer.php';
?>
