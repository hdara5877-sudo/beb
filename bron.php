<?php
include "./core.php";
$err = isset($_COOKIE['err']) ? $_COOKIE['err'] : '';
$user_id = $_COOKIE['user_id'] ?? '';
?>

<div class="bron-modal">
    <h2>Бронирование столика</h2>
    <form action="bron_action.php" method="post">

        <h3><?=$err?></h3>
        <input type="hidden" name="name" value="<?=$user_id?>">

        <input type="date" name="date" required placeholder="Дата">

        <input type="time" name="time" required placeholder="Время">

        <input type="number" name="number" min="1" max="10" required placeholder="Количество гостей">

        <input type="text" name="text" required placeholder="Особые пожелания">

        <input type="hidden" name="bron" value="bron">

        <button>Забронировать</button>
    </form>
</div>

