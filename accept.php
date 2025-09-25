<?php
include "./core.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $link->query("UPDATE apps SET accepted = 1 WHERE `id` = '$id'");
}
header('Location: admin.php');