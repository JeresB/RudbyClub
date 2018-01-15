<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

if ($_SESSION['admin'] != true) {
  header('Location: /photos.php');
} else {
  $pdo = dbConnect();
  $requete = $pdo->prepare("INSERT INTO photos(alt, src) VALUES(:alt, :src)");
  $requete->bindParam(':alt', $_POST['alt'], PDO::PARAM_STR);
  $requete->bindParam(':src', $_POST['src'], PDO::PARAM_STR);

  $resultat = $requete->execute();

  header('Location: /photosAdmin.php');
}
