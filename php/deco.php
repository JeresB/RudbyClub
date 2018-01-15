<?php
session_start();

unset($_SESSION['admin']);
echo $lien;
echo $_POST['page'];
$page = $_POST['page'];
header("Location: $page");

?>