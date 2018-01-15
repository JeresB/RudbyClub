<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$page = "Interface Admin Photos";
$lien = "../photosAdmin.php";
$breadcrumb = "Interface Admin Photos";

if ($_SESSION['admin'] != true) {
  header('Location: /photos.php');
} else {
  $pdo = dbConnect();
  $requete = $pdo->prepare("SELECT * FROM photos");

  $requete->execute();
  $photos = $requete->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php require_once('templates/head.html'); ?>
    <title><?php echo $page; ?></title>
</head>

<body>
    <?php require_once('templates/navbar.html'); ?>

    <div class = "container">
    <?php require_once('templates/breadcrumb.php'); ?>
    <?php require_once('templates/alertAdmin.php'); ?>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ajouter une photos</h3>
            </div>
            <div class="panel-body">
              <form action="/add_photo.php" method="post">
                <div class="form-group">
                  <label for="alt">Nom</label>
                  <input type="text" class="form-control" id="alt" name="alt" placeholder="Nom de l'image">
                </div>
                <div class="form-group">
                  <label for="src">Chemin d'accès de l'image</label>
                  <input type="text" class="form-control" id="src" name="src" placeholder="/images/nom.format">
                </div>
                <br />
                <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Listes des images</h3>
            </div>
            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th>Source</th>
                    <th>Effacer</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($photos as $photo) {
                    echo '<tr>
                            <td>'.$photo['alt'].'</td>
                            <td>'.$photo['src'].'</td>
                            <td>
                              <form action="/delete_photo.php" method="post">
                                <input type="hidden" name="id_photo" value="'.$photo['id'].'">
                                <button type="submit" class="btn btn-danger btn-sm float-right" style="margin-bottom: 2px;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                              </form>
                            </td>
                          </tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>

    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>

</body>

</html>
