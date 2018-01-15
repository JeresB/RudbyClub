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
    <title>Ajout | News</title>
    <?php require_once('templates/head.html'); ?>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/form_ajout_item.css">
    <link href="css/datepicker/jquery.datepick.css" rel="stylesheet">
    <link rel="stylesheet" href="css/richtext.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <h2>Crée une actualitée !</h2>
                <form method="post" action="ajouter_news.php">
                  <div class="form-group">
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="description" name="texte" placeholder="Description" rows="18" cols="30" required></textarea>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="date" type="text" name="date" placeholder="Date"></input>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="image" placeholder="images/nom_image.format"></input>
                  </div>
                  <button type="submit" class="btn btn-default my-3">Ajouter <i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>



<?php

$titre = isset($_POST["titre"]) ? htmlspecialchars($_POST["titre"]) : NULL;
$texte = isset($_POST["texte"]) ? htmlspecialchars($_POST["texte"]) : "";
$date = isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : "";
$image = isset($_POST["image"]) ? htmlspecialchars($_POST["image"]) : "";


if ($titre != NULL && $_SESSION['admin'] == true) {
    $requete_sql = "INSERT INTO news (titre, date, image, texte) VALUES (:titre, :date, :image, :texte)";
    $query = $pdo->prepare($requete_sql);

    $query->bindParam(":titre", $titre, PDO::PARAM_STR);
    $query->bindParam(":texte", $texte, PDO::PARAM_STR);
    $query->bindParam(":date", $date, PDO::PARAM_STR);
    $query->bindParam(":image", $image, PDO::PARAM_STR);
    $query->execute();
    // Redirection vers la liste des étudiants
    header('Location: news.php');
  }
?>

    <?php require_once('templates/footer-js.html'); ?>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/datepicker/jquery.plugin.min.js"></script>
    <script src="js/datepicker/jquery.datepick.js"></script>

    <script>
      $('#description').richText();

      $("#date").datepick({dateFormat: 'yyyy-mm-dd'});
    </script>
</body>
</html>
