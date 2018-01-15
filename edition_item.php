<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$query = $pdo->prepare("SELECT * FROM item WHERE id=:id");
$query->bindParam(":id", $_POST['id'], PDO::PARAM_INT);
$query->execute();

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
    <?php
        $row = $query->fetch();
    ?>
    <form class="form" method="post" action="edition_item.php">
        <h2>Editer l'objet !</h2>
        <p type="*Nom:"><input name="nom" value="<?php echo $row['nom']; ?>"></input></p>
        <p type="*Prix:"><input name="prix" value="<?php echo $row['prix']; ?>"></input></p>
        <p type="Description:"><input name="description" value="<?php echo $row['description']; ?>"></input></p>
        <p type="Lien:"><input name="lien" value="<?php echo $_POST['lien']; ?>"></input></p>
        <p type="Image:"><input name="image" value="<?php echo $row['image']; ?>"></input></p>
        <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>" />
        <button type="submit">Editer l'objet <i class="fa fa-pencil" aria-hidden="true"></i></button>
    </form>

<?php

$nom = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : NULL;
$prix = isset($_POST["prix"]) ? htmlspecialchars($_POST["prix"]) : NULL;
$description = isset($_POST["description"]) ? htmlspecialchars($_POST["description"]) : "";
$lien = isset($_POST["lien"]) ? htmlspecialchars($_POST["lien"]) : "";
$image = isset($_POST["image"]) ? htmlspecialchars($_POST["image"]) : "";
$id = $_POST['id'];

if ($nom != NULL && $prix != NULL && $_SESSION['admin'] == true) {
    $requete_sql = "UPDATE item SET nom=:nom, prix=:prix, description=:description, lien=:lien, image=:image WHERE id=:id";
    $query = $pdo->prepare($requete_sql);
    $query->bindParam(":nom", $nom, PDO::PARAM_STR);
    $query->bindParam(":prix", $prix, PDO::PARAM_INT);
    $query->bindParam(":description", $description, PDO::PARAM_STR);
    $query->bindParam(":lien", $lien, PDO::PARAM_STR);
    $query->bindParam(":image", $image, PDO::PARAM_STR);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute();
    // Redirection vers la liste des étudiants
    header('Location: boutique.php');
  }
?>

</body>
</html>