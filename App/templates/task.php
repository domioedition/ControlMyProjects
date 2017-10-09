<?php
//session_start();
//require_once '../../autoload.php';


// $controller = new App\Controllers\Task();
// $task = $controller->action('Task');
// //var_dump($task);
//
// $task_id = (empty($_GET['task_id'])) ? null : $_GET['task_id'];
// $current_task = $task->find_by_id($task_id);
//
// $assignee = $current_task->getAssign();
// if ($assignee == 0) {
//     $assignee = 'no one.';
// } else {
//     $assignee = \App\Models\ModelUser::find_by_id($assignee);
//     $assignee = $assignee->name;
// }





include_once 'header.php';

//die(1);
print_r(get_defined_vars());
//var_dump($task);

$current_task = null;
if($current_task == null) die("Current task = null");

?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $current_task->task_name; ?></h1>
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
                            Assigned to <?php echo $assignee; ?>
                            <?php
                            echo '<h3>' . $current_task->task_name . '</h3>';
                            echo '<p>' . $current_task->task_description . '</p>';
                            echo '<p>Task creator: <code>' . $current_task->user->name . '</code><br></p>';
                            echo '<p>Task assignee: <code>' . $assignee . '</code><br></p>';
                            echo '<p><small>Date creation: ' . date("d/m/Y H:i", $current_task->task_date_creation) . '</small></p>';
                            echo '<p><small>Date update: ' . date("d/m/Y H:i", $current_task->task_date_creation) . '</small></p>';
                            echo '<p>Task status: ' . $current_task->task_status . '</p>';
                            echo '<a href=index.php?action=delete&id=' . $task_id . '><button type="button" class="btn btn-danger" onclick="return confirm(\'Вы действительно хотите удалить эту запись?\');">Delete</button></a>';
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
                                    $users = \App\Models\ModelUser::find_all();
                                    foreach ($users as $user) {
                                        echo '<option value="' . $user->id . '">' . $user->name . ' - ' . $user->email . '</option>';
                                    }
                                    ?>
                                </select>
                                <input type="text" name="task_id" value="<?php echo $task_id; ?>" hidden><br>
                                <button type="submit" class="btn btn-success btn-block">Assign</button>
                            </form>
                            <br>
                            <form action="/App/templates/task_change_status.php" method="post">
                                <input type="text" name="task_id" value="<?php echo $task_id; ?>" hidden>
                                <label>Change status</label>
                                <select class="form-control" name="task_status">
                                    <option
                                        value="0" <?php if ($current_task->getTaskStatus() == 0) echo "selected='selected'"; ?>>
                                        To Do
                                    </option>
                                    <option
                                        value="1" <?php if ($current_task->getTaskStatus() == 1) echo "selected='selected'"; ?>>
                                        In progress
                                    </option>
                                    <option
                                        value="2" <?php if ($current_task->getTaskStatus() == 2) echo "selected='selected'"; ?>>
                                        Hold
                                    </option>
                                    <option
                                        value="3" <?php if ($current_task->getTaskStatus() == 3) echo "selected='selected'"; ?>>
                                        Review
                                    </option>
                                    <option
                                        value="4" <?php if ($current_task->getTaskStatus() == 4) echo "selected='selected'"; ?>>
                                        Ready for Acceptance
                                    </option>
                                    <option
                                        value="5" <?php if ($current_task->getTaskStatus() == 5) echo "selected='selected'"; ?>>
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
                            <h3>Comments</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            // TODO chqnge project id from default
                            $project_id = 1;
                            $comments = new \App\Controllers\ControllerComment();
                            $all_comments = $comments->showAllComments($project_id, $task_id);
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
                            <form role="form" action="/App/templates/add_comment.php" method="post">
                                <div class="form-group">
                                    <label>Comment</label>
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                    <input type="text" name="project_id" value="<?php echo $project_id; ?>" hidden>
                                    <input type="text" name="task_id" value="<?php echo $task_id; ?>" hidden>
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
    <!-- /#page-wrApper -->



<?php

include_once 'footer.php';
 ?>
