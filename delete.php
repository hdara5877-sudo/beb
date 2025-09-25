<?php
include "./core.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $link->query("DELETE FROM apps WHERE `id` = '$id'");
}
header('Location: admin.php');