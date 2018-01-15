<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$id = $_POST["id"];

if($_SESSION['admin'] == true) {
    $requete = "DELETE FROM news WHERE id = :id";
    
    $query = $pdo->prepare($requete);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute(); 
}

header('Location: news.php');