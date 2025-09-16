<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if (empty($name)){
        $errors[] = "Введите имя";
    }

    if (empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Введите корректный email";
    }

    if (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать не менее 6 символов";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Пароли не совпадают";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    }
}
 ?>