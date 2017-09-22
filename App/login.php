<?php
session_start();
//session_destroy();

if (isset($_GET['logout'])) {
    session_destroy();
    setcookie('login', '', 0, "/");
    setcookie('password', '', 0, "/");
    header('Location: ../index.php');
    exit;
}

if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login == 'mars' && $password == '12341234') {
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = $login;
        header('Location: ../');
    } else {
        die("Error. Unknown user or password");
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Please Sign in</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <h1>Sign in</h1>
            <form action="login.php" method="post">
                <input type="text" name="login">
                <input type="password" name="password">
                <input type="submit" value="Log In">
            </form>
        </div>
        <div class="col-4"></div>
    </div>
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
