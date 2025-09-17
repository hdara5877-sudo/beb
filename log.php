<?php
include "./core.php";
$err = isset($_COOKIE['err']) ? $_COOKIE['err'] : '';
?>

<div class="log-modal">
    <h2>Вход</h2>
    <form action="log_action.php" method="post">

        <h3><?=$err?></h3>

        <input type="email" name="email" required placeholder="Емейл">

        <input type="password" name="password" minlength="6" required placeholder="Пароль">

        <input type="hidden" name="log" value="log">

        <button>Вход</button>
    </form>
    <button id="change">Нет аккаунта</button>
</div>