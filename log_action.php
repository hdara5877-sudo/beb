<?php

include "./core.php";

if(isset($_POST['log'])) {
    setcookie('err', '');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $auth = $link->query("SELECT COUNT(*) as cnt FROM users WHERE `email` = '$email'")->fetch_assoc()['cnt'];
    if($auth == 0) {
        setcookie('err', 'Емейл не найден');
        header("Location: index.php");
        return null;
    }
    $auth = $link->query("SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'");
    if($auth->num_rows == 0) {
        setcookie('err', 'Неверный пароль');
        header("Location: index.php");
        return null;
    }
    $auth = $auth->fetch_assoc();
    setcookie('user_id', $auth['id']);
    setcookie('user_name', $auth['name']);
    setcookie('user_role', $auth['role']);
    header("Location: index.php");
}
else {
    header("Location: index.php");
}
