<?php
include "./core.php";
$err = isset($_COOKIE['err']) ? $_COOKIE['err'] : '';
?>

<div class="reg-modal">
    <h2>Регистрация</h2>
    <form action="reg_action.php" method="post">

        <h3><?=$err?></h3>

        <input type="text" name="name" required placeholder="Имя">

        <input type="email" name="email" required placeholder="Емейл">

        <input type="password" name="password" minlength="6" required placeholder="Пароль">

        <input type="password" name="check" required placeholder="Повторите пароль">

        <input type="hidden" name="reg" value="reg">

        <button>Зарегистрироваться</button>
    </form>
    <button id="change">Есть аккаунт</button>
</div>