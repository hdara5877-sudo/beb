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
        <div class="link"><a href="contacts.html">Контакты</a></div>
        <div class="link"><a href="info.html">О нас</a></div>
        <div class="link"><a href="admin.php">Админ</a></div>
        <button id="auth">Вход</button>
    </div>
<div class="inner">
    <h1>Входящие заявки</h1>

<?php 
    include "./core.php";
    
    $result = $link->query("SELECT * FROM apps ORDER BY dateTime DESC");

    if ($result && $result->num_rows > 0) {
    }
?>
<?php

foreach($result as $column) { ?>

    <div class="col">
        <div class="column"><img src="image/zal3.png" alt=""></div>
        <div class="column" id="col1">
            <h4>Бронь столика на <?=$column['dateTime']?></h4>
            <p>Количество гостей: <?=$column['number']?></p>
            <h4>Принять заявку Отклонить заявку</h4>
        </div>
    </div>
</div>
<?php }

?>

    <div class="footer">
        <p>2025 &copy;</p>
    </div>
</body>
</html>