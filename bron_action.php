<?php

include "./core.php";

if(isset($_POST['bron'])) {
    $_COOKIE['err'] = '';
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $number = $_POST['number'];
    $text = $_POST['text'];

    if(empty($name) || empty($date) || empty($time) || empty($number)){
        setcookie('err', 'Заполните все обязательные поля');
        header('Location: bron.php');
        exit();
    }
    var_dump($date, $time);
    $dateTime = DateTime::createFromFormat('Y-m-d H:i', $date . ' ' . $time)->format('Y-m-d H:i');
    $link->query("INSERT INTO apps(`user_id`, `datetime`, `number`, `comment`, `accepted`)
    VALUES ($name, '$dateTime', '$number', '$text', false)");
    header('Location: bron.php');
    exit();
}
