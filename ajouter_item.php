<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Ajout | Boutique</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/form_ajout_item.css">

  
</head>

<body>
    <form class="form" method="post" action="ajouter_item.php">
        <h2>Crée un objet !</h2>
        <p type="*Nom:"><input name="nom" placeholder="Nom"></input></p>
        <p type="*Prix:"><input name="prix" placeholder="Prix"></input></p>
        <p type="Description:"><input name="description" placeholder="Description"></input></p>
        <p type="Lien:"><input name="lien" placeholder="Lien"></input></p>
        <p type="Image:"><input name="image" placeholder="images/nom_image.format"></input></p>
        <button type="submit">Ajouter l'objet <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
    </form>

<?php

$nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : NULL;
$prix = isset($_POST["prix"]) ? htmlspecialchars($_POST["prix"]) : NULL;
$description = isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : "";
$lien = isset($_POST["lien"]) ? htmlspecialchars($_POST["lien"]) : "";
$image = isset($_POST["image"]) ? htmlspecialchars($_POST["image"]) : "";

if ($nom != NULL && $prix != NULL && $_SESSION['admin'] == true) {
    $requete_sql = "INSERT INTO item (nom, prix, description, lien, image) VALUES (:nom, :prix, :description, :lien, :image)";
    $query = $pdo->prepare($requete_sql);
    
    $query->bindParam(":nom", $nom, PDO::PARAM_STR);
    $query->bindParam(":prix", $prix, PDO::PARAM_INT);
    $query->bindParam(":description", $description, PDO::PARAM_STR);
    $query->bindParam(":lien", $lien, PDO::PARAM_STR);
    $query->bindParam(":image", $image, PDO::PARAM_STR);
    $query->execute();
    // Redirection vers la liste des étudiants
    header('Location: boutique.php');
  }
?>

</body>
</html>