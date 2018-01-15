<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

if ($_SESSION['admin'] != true) {
  header('Location: /photos.php');
} else {
  $pdo = dbConnect();
  $requete = $pdo->prepare("DELETE FROM photos WHERE id = :id");
  $requete->bindParam(':id', $_POST['id_photo'], PDO::PARAM_INT);

  $resultat = $requete->execute();

  header('Location: /photosAdmin.php');
}
