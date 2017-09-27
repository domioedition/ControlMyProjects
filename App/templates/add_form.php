<?php






?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new task</title>
</head>
<body>
<form action="App/templates/add.php" method="post">
    <input type="text" name="task_name" placeholder="Task name"><br><br>
    <textarea name="task_description" id="" cols="30" rows="10" placeholder="Task description"></textarea><br>
    <input type="submit" value="Add new task">
</form>
</body>
</html>
