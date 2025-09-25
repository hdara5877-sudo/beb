<?php 
setcookie('user_id', '', time() - 3600, '/');
setcookie('user_name', '', time() - 3600, '/');
setcookie('user_role', '', time() - 3600, '/');
session_start();
session_destroy();
header('Location: index.php');
exit;