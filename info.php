<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>О нас</title>
</head>
<body>
    <div class="header">
       <a id="logo" href="index.php"><img src="image/logo.png" alt=""></a>
        <?php if(isset($_COOKIE['user_id'])) { ?><div class="link"><a href="appliation.php">Мои заявки</a></div><? }?>
        <div class="link"><a href="contacts.php">Контакты</a></div>
        <?php if(isset($_COOKIE['user_role']) && $_COOKIE['user_role'] == 'admin') { ?><div class="link"><a href="admin.php">Админ-панель</a></div><? }?>
        <?php if(!isset($_COOKIE['user_id'])) { ?><button id="auth">Регистрация <?php if($err !== '') { ?><br><?=$err?><?php } ?></button><? }?>
    </div>
    
<div class="info">
    <div class="left">
        <img src="image/1.jfif" alt="" srcset="">
        <div class="text">
            <h3>Мы рады предложить вам:</h3>
            <ol>
                <li>Удобное бронирование онлайн: забронируйте столик в любое удобное время, не выходя из дома.</li>
                <li>Гибкость в выборе времени: найдите идеальное время для вашего визита.</li>
                <li>Профессиональное обслуживание: наши официанты всегда готовы помочь с выбором блюд и напитков, создавая атмосферу уюта и комфорта.</li>
            </ol>
        </div>
    </div>
    <div class="right">
        <p>Добро пожаловать в наш уютной ресторан, где каждый визит становится особенным событием!</p>
        <div class="right-imgs">
            <img src="image/info.jfif" class="right-img" alt="" srcset="">
            <img src="image/zal2.png" class="right-img" alt="" srcset="">
        </div>
    </div>
</div>
    <div class="footer">
        <p>2025 &copy;</p>
    </div>
</body>
</html>