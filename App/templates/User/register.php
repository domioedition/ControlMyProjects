<?php

include '../../../autoload.php';

try {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if (!$email) {
        throw new Exception('Not correct email address');
    }
    $password = filter_input(INPUT_POST, 'password');
    if (!$password || mb_strlen($password) < 3){
        throw new Exception('Password less 3 symbols');
    }

    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);
    if($passwordHash === false){
        throw new Exception('Error during hashing');
    }

    $user = new \App\Controllers\ControllerUser();
    $user->name = ucfirst(strstr($email, '@', true));
    $user->email = $email;
    $user->password_hash = $passwordHash;
    $user->rights = 15;
    $user->register();


    header('HTTP/1.1 302 Redirect');
    header('Location: login.php');
} catch (Exception $e) {
    header('HTTP/1.1 400 Bad request');
    echo $e->getMessage();
}