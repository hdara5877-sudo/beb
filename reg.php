<?php
include "./core.php"


?>

<h2>Регистрация</h2>
<form action="reg_action.php" method="post">
<p>
    <input type="text" name="email" id="email" required>
</p>
<p>
    <input type="password" name="password" minlength="6" id="password" required>
</p>
<p>
    <input type="password" name="password" id="password" required>
</p>
<button>Зарегистрироваться</button>
</form>