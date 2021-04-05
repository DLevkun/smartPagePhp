<?php 
    include "check.php";
    session_start();

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die("Не правильний формат електронної адреси!");
    }

    $email = check($_POST['email']);
    $phone = check($_POST['phone']);
    $password = check($_POST['password']);
    $_SESSION['email'] = $email;
    
    if(!(preg_match("/^\+380\d{9}$/", $phone) or preg_match("/^0\d{9}$/", $phone))){
        die("Неправильний формат номеру телефона!");
    } 

    if(strlen($password) < 6){
            die("Пароль занадто короткий! Пароль має містити більше 5 символів");
    }

    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['password'] = $password;

    header("Location: form-action.php");
?>