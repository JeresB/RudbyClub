<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$query = $pdo->prepare("SELECT * FROM news WHERE id=:id");
$query->bindParam(":id", $_POST['id'], PDO::PARAM_INT);
$query->execute();

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Editer | News</title>
  <?php require_once('templates/head.html'); ?>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/form_ajout_item.css">
  <link href="css/datepicker/jquery.datepick.css" rel="stylesheet">
  <link rel="stylesheet" href="css/richtext.min.css">

</head>

<body>
    <?php
        $row = $query->fetch();
        $texte = htmlspecialchars_decode($row['texte']);
    ?>
        <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h2>Editer une actualitée !</h2>
                <form method="post" action="edition_news.php">
                  <div class="form-group">
                    <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" value="<?php echo $row['titre']; ?>" required>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="description" name="texte" placeholder="Description" rows="18" cols="30" required><?= $row['texte']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="date" type="text" name="date" placeholder="Date" value="<?php echo $row['date']; ?>"></input>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" name="image" placeholder="images/nom_image.format" value="<?php echo $row['image']; ?>"></input>
                  </div>
                  <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>" />
                  <button type="submit" class="btn btn-default my-3">Editer l'actualitée <i class="fa fa-pencil" aria-hidden="true"></i></button>
                </form>

            </div>
        </div>
    </div>



<?php

$titre = isset($_POST["titre"]) ? htmlspecialchars($_POST["titre"]) : "";
$texte = isset($_POST["texte"]) ? htmlspecialchars($_POST["texte"]) : "";
$date = isset($_POST["date"]) ? htmlspecialchars($_POST["date"]) : "";
$image = isset($_POST["image"]) ? htmlspecialchars($_POST["image"]) : "";
$id = $_POST['id'];

if ($titre != "" && $texte != "" && $_SESSION['admin'] == true) {
    $requete_sql = "UPDATE news SET titre=:titre, texte=:texte, date=:date, image=:image WHERE id=:id";
    $query = $pdo->prepare($requete_sql);
    $query->bindParam(":titre", $titre, PDO::PARAM_STR);
    $query->bindParam(":texte", $texte, PDO::PARAM_STR);
    $query->bindParam(":date", $date);
    $query->bindParam(":image", $image, PDO::PARAM_STR);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute();
    // Redirection vers la liste des étudiants
    echo "<script>document.location.href='news.php'</script>";

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
