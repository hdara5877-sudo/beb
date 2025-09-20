<?php
include "./core.php";
$err = isset($_COOKIE['err']) ? $_COOKIE['err'] : '';
?>

<div class="bron-modal">
    <h2>Бронирование столика</h2>
    <form action="bron_action.php" method="post">

        <h3><?=$err?></h3>
        <input type="text" name="name" required placeholder="Имя">

        <input type="date" name="date" required placeholder="Дата">

        <input type="time" name="time" required placeholder="Время">

        <input type="number" name="number" required placeholder="Количество гостей">

        <input type="text" name="text" required placeholder="Особые пожелания">

        <input type="hidden" name="bron" value="bron">

        <button>Забронировать</button>
    </form>
</div>
