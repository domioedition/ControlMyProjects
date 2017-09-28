<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Control-My-Projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1>Dashboard</h1>
            <a href="index.php?action=addForm">
                <button class="btn btn-success" type="button">Add new task</button>
            </a>
        </div>
    </div>
    <hr>
    <?php

    if (empty($tasks)) {
        echo "0 tasks. Please create new";
    }

    foreach ($tasks as $task) {

//        var_dump($task);
        $task_id = $task->id;
        $user_id_creator = $task->user_id_creator;
        $user_id_assignee = $task->user_id_assignee;
        $task_name = $task->task_name;
        $task_description = $task->task_description;
        $task_date_creation = date('d/m/Y H:i', $task->task_date_creation);


        echo '<div class="row">
        <div class="col">';

        echo "id: " . $task_id . "<br>";
        echo '<a href=index.php?action=delete&id=' . $task_id . '>Delete</a>';
        echo '<h4>' . $task_name . '</h4>';
        echo "<p>$task_description</p>";
        echo "<p>$task_date_creation</p>";
//        echo '<a href=index.php?action=One&id=' . $task->id . '>  more.. </a>';
        if (!empty($task->user)) {
            echo "Created by: " . $task->user->name;
        } else {
            echo "Created by: NULL";
        }
        echo '</div>
          </div>';
        echo '<hr>';
    }
    ?>


</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>