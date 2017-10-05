<?php
session_start();
require_once '../../autoload.php';


$controller = new App\Controllers\Task();
$task = $controller->action('Task');
//var_dump($task);

$task_id = (empty($_GET['task_id'])) ? null : $_GET['task_id'];
$current_task = $task->find_by_id($task_id);

$assignee = $current_task->getAssign();
if ($assignee == 0) {
    $assignee = 'no one.';
} else {
    $assignee = \App\Models\ModelUser::find_by_id($assignee);
    $assignee = $assignee->name;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control My Projects</title>

    <!-- Bootstrap Core CSS -->
    <link href="/../app/templates/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/../app/templates/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/../app/templates/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/../app/templates/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/../app/templates/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/../app/templates/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/../app/templates/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../">Control My projects</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="/../app/templates/User/login.php?logout"><i class="fa fa-sign-out fa-fw"></i>
                            Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="../../"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

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

                            <form action="/../App/templates/task_assign.php" method="post">
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
                            <form action="/../App/templates/task_change_status.php" method="post">
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
                            <form role="form" action="/../App/templates/add_comment.php" method="post">
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

    <!-- jQuery -->
    <script src="/../App/templates/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/../App/templates/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/../App/templates/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/../App/templates/vendor/raphael/raphael.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/../App/templates/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="/../App/templates/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/../App/templates/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/../App/templates/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {
            $('#dataTables-tasks').DataTable({
                responsive: true,
                "aaSorting": [[0, 'desc']],
                "iDisplayLength": 25,
                "aLengthMenu": [[10, 25, 50, 100, 500, 1000, -1], [10, 25, 50, 100, 500, 1000, "All"]]
            });
        });
    </script>

</body>

</html>
