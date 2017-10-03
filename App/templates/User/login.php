<?php

session_start();



include '../../../autoload.php';


if (isset($_GET['logout']))
{
    session_destroy();
    setcookie('login', '', 0, "/");
    setcookie('password', '', 0, "/");
    // и переносим его на главную
    header('Location: /index.php');
    exit;
}


try {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $user = new \App\Controllers\ControllerUser();
    $foundUser = $user->findUserByEmail($email);


    if (password_verify($password, $foundUser->password_hash) === false) {
        throw new Exception('Invalid password');
    }


    $currentHashAlgoritm = PASSWORD_DEFAULT;
    $currentHashOptions = array('cost' => 12);
    $passwordNeedRehash = password_needs_rehash($foundUser->password_hash, $currentHashAlgoritm, $currentHashOptions);

    if ($passwordNeedRehash === true) {
        $user->password_hash = password_hash($password, $currentHashAlgoritm, $currentHashOptions);
        $user->register();
    }

    $_SESSION['user_logged_in'] = 'yes';
    $_SESSION['user_email'] = $email;
    $_SESSION['user_id'] = $foundUser->id;

    header('HTTP/1.1 302 Redirect');
    header('Location: /index.php');

}catch (Exception $e){
    header('HTTP/1.1 401 Unauthorized');
    echo $e->getMessage();
}