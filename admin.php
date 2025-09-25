<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Админ панель</title>
</head>
<body>
     <div class="header">
        <a id="logo" href="index.php"><img src="image/logo.png" alt=""></a>
        <div class="link"><a href="appliation.php">Мои заявки</a></div>
        <div class="link"><a href="contacts.php">Контакты</a></div>
        <div class="link"><a href="info.php">О нас</a></div>
    </div>
<div class="inner">
    <h1>Входящие заявки</h1>

<?php 
    include "./core.php";
    if(!isset($_COOKIE['user_role']) || $_COOKIE['user_role'] == 'client') {
        header("Location: index.php");
    }
    $result = $link->query("SELECT a.dateTime, a.accepted, a.number, a.comment, a.id, u.name FROM apps a JOIN users u ON a.user_id = u.id ORDER BY dateTime DESC");

    if ($result && $result->num_rows > 0) {
?>
<?php

foreach($result as $column) { ?>

    <div class="col">
        <div class="column"><img src="image/zal3.png" alt=""></div>
        <div class="column" id="col1">
            <h4>Бронь столика на <?=$column['dateTime']?> от <?=$column['name']?></h4>
            <p>Количество гостей: <?=$column['number']?></p>
            <p>Пожелания:  <?=$column['comment']?></p>
            <a href="delete.php?id=<?=$column['id']?>">Отклонить (удалить) заявку</a><br>
            <a href="accept.php?id=<?=$column['id']?>">Принять заявку (<? echo $column['accepted'] == 1 ? 'Принята' : 'Не принята'?>)</a>
        </div>
    </div>
</div>
<?php }
    } else {
?>
<h1>jojo</h1> <? } ?>
    <div class="footer">
        <p>2025 &copy;</p>
    </div>
</body>
</html>