<?php


try{
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//    var_dump($email);

    if(!$email){
        throw new Exception('Wrong email');
    }
}catch (Exception $e){
    header ('HTTP/1.1 400 Bad request');
    echo $e->getMessage();
}

//print_r($_POST);
