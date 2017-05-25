<?php
session_start();
$_SESSION["email"] = null;
$url = "index.php";
header('Location: '.$url);
?>