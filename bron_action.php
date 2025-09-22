<?php

include "./core.php";

if(isset($_POST['bron'])) {
    $_COOKIE['err'] = '';
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $number = $_POST['$number'];
    $text = $_POST['$text'];

if(empty($name) || empty($date) || empty($time) || empty($number)){
    setcookie('err', 'Заполните все обязательные поля', time() + 3600, '/');
    header('Location: bron.php');
    exit();
}

if(isset($mysqli)){
    $mysqli = "INSERT INTO reservations(name, date , time, guests, special_requests, created_at)
    VALUES ('$name', '$date', '$time', '$number', '$text', NOW())";

   
    header('Location: bron.php');
    exit();
} 
}
