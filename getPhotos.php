<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$query = $pdo->prepare("SELECT * FROM photos");
$query->execute();

$data = array();

for ($i = 0; $row = $query->fetch(); $i++) {
  $data[$i]['id'] = $row['id'];
  $data[$i]['alt'] = $row['alt'];
  $data[$i]['src'] = $row['src'];
}

echo json_encode($data);
?>
