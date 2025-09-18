<?php
include "./core.php";
$err = isset($_COOKIE['err']) ? $_COOKIE['err'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Главная</title>
</head>
<body>
    <div class="header">
        <a id="logo" href="index.php"><img src="image/logo.png" alt=""></a>
        <div class="link"><a href="appliation.html">Мои заявки</a></div>
        <div class="link"><a href="contacts.html">Контакты</a></div>
        <div class="link"><a href="info.html">О нас</a></div>
        <div class="link"></div>
        <button id="auth">Регистрация <?php if($err !== '') { ?><br><?=$err?><?php } ?></button>
    </div>
        <div class="picture">
            <h3>Добро пожаловать</h3>
            <button id="bron">Забронировать  <?php if($err !== '') { ?><br><?=$err?><?php } ?></button>
        </div>
        <div class="main">
            <div class="card">
                <img src="image/zal1.png" alt="" srcset="">
                <h3>Зал №1</h3>
                <p>Зал оформлен в элегантном современном стиле с элементами классического дизайна.</p>
                <h4>Свободно столиков: 10</h4>
                <h4>Посмотреть свободные столики</h4>
            </div>
            <div class="card">
                <img src="image/zal2.png" alt="" srcset="">
                <h3>Зал №2</h3>
                <p>Мягкое освещение и приглушенные тона создают атмосферу уюта и расслабления.</p>
                <h4>Свободно столиков: 3</h4>
                <h4>Посмотреть свободные столики</h4>
            </div>
            <div class="card">
                <img src="image/zal3.png" alt="" srcset="">
                <h3>Зал №3</h3>
                <p>Просторное помещение позволяет комфортно разместиться всей компании, не чувствуя стесненности.</p>
                <h4>Свободно столиков: 7</h4>
                <h4>Посмотреть свободные столики</h4>
            </div>
        </div>
        
        <h3 id="cuh">Кухня</h3>
        <div class="cuh">
            <div class="myau"><img src="image/maso.png" alt="">
                <p>Мясные блюда</p></div>
            <div class="myau"><img src="image/rib.png" alt="">
                <p>Морепродукты</p></div>
            <div class="myau"><img src="image/cuh.png" alt="">
                <p>Молекулярная кухня</p></div>
        </div>
        <div class="footer">
            <p>2025 &copy;</p>
        </div>
        <div class="modal-field">
            <?php
                include "./reg.php";
                include "./log.php";
            ?>
        </div>
        <script src="index.js"></script>
</body>
</html>