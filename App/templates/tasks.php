<?php
include_once 'header.php';
?>
    <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Tasks</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/task/add">
                        <button type="button" class="btn btn-success">Add new task</button>
                    </a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-tasks">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Task Name</th>
                            <th>Creator</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (empty($tasks)) {
                            echo "0 tasks. Please create new";
                        }

                        foreach ($tasks as $task) {
                            $task_id = $task->id;
                            $user_id_creator = $task->user_id_creator;
                            $user_id_assignee = $task->user_id_assignee;
                            $task_name = $task->task_name;
                            $task_description = $task->task_description;
                            $task_date_creation = date('d/m/Y H:i', $task->task_date_creation);
                            switch ($task->getTaskStatus()) {
                                case 0 :
                                    $task_status = '<button type="button" class="btn btn-primary btn-xs btn-block">To Do</button>';
                                    break;
                                case 1 :
                                    $task_status = '<button type="button" class="btn btn-warning btn-xs btn-block">In Progress</button>';
                                    break;
                                case 2 :
                                    $task_status = '<button type="button" class="btn btn-danger btn-xs btn-block">Hold</button>';
                                    break;
                                case 3 :
                                    $task_status = '<button type="button" class="btn btn-info btn-xs btn-block">Review</button>';
                                    break;
                                case 4 :
                                    $task_status = '<button type="button" class="btn btn-info btn-xs btn-block">Ready for Acceptance</button>';
                                    break;
                                case 5 :
                                    $task_status = '<button type="button" class="btn btn-success btn-xs btn-block">Done</button>';
                                    break;
                                default :
                                    $task_status = '<button type="button" class="btn btn-primary btn-xs btn-block">To Do</button>';
                            }

                            if (!empty($task->user)) {
//                                $task_creator = $task->user->name;
                                $task_creator = "Admin";
                            } else {
                                $task_creator = "Unknown_PleaseCheck";
                            }
                            echo "<tr onclick='window.location.href=\"/task/one/$task_id\"'>
                                            <td>$task_id</td>
                                            <td>$task_status</td>
                                            <td>$task_name</td>
                                            <td>$task_creator</td>
                                            <td>$task_date_creation</td>
                                        </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>


    </div>


<?php
include_once 'footer.php';
