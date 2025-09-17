<?php

include "./core.php";

if(isset($_POST['reg'])) {
    $_COOKIE['err'] = '';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check = $_POST['check'];
    if($check !== $password) {
        setcookie('err', 'Пароли не совпадают');
        header("Location: index.php");
        return null;
    }
    $uniq = $link->query("SELECT COUNT(*) as cnt FROM users WHERE `email` = '$email'")->fetch_assoc()['cnt'];
    if($uniq > 0) {
        setcookie('err', 'Емейл занят');
        header("Location: index.php");
        return null;
    }
    $link->query("INSERT INTO users (`name`, `email`, `password`, `role`) VALUES ('$name', '$email', '$password', 'client')");
    header("Location: index.php");
}
else {
    header("Location: index.php");
}