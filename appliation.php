<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Мои заявки</title>
</head>
<body>
     <div class="header">
        <a id="logo" href="index.php"><img src="image/logo.png" alt=""></a>
        <div class="link"><a href="contacts.php">Контакты</a></div>
        <div class="link"><a href="info.php">О нас</a></div>
        <?php if(isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == 'admin') { ?><div class="link"><a href="admin.php">Админ-панель</a></div><? }?>
    </div>
<div class="inner">
    <h1>Мои заявки</h1>
     <?php 
    include "./core.php";
    if(!isset($_COOKIE['user_role'])) {
        header("Location: index.php");
    }
    $user_id = $_COOKIE['user_id'];
    $result = $link->query("SELECT * FROM apps WHERE `user_id` = '$user_id' ORDER BY dateTime DESC");

?>

<?php

foreach($result as $column) { ?>

    <div class="col">
        <div class="column"><img src="image/zal3.png" alt=""></div>
        <div class="column" id="col1">
            <h4>Забронирован столик на <?=$column['dateTime']?></h4>
            <p>Количество гостей: <?=$column['number']?></p>
            <p>Пожелания: <?=$column['comment']?></p>
        </div>
        <div class="column" id="col2">
            <h3>Статус:</h3>
            <h4>Заявка в обработке</h4>
        </div>
    </div>
</div>
<?php }

?>
    <div class="footer">
        <p>2025 &copy; ждем ваши отзывы</p>
    </div>
</body>
</html>