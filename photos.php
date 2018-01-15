<?php
session_start();

$page = "Photos";
$lien = "../photos.php";
$breadcrumb = "Photos";
?>

<!DOCTYPE html>
<html lang="en">

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
      <div class="col-md-12">
        <?php if($_SESSION['admin'] == true) echo '<a href="/photosAdmin.php" class="btn btn-success" style="margin-bottom: 20px;">Interface Admin Photos</a>'; ?>    
      </div>
    </div>
        <div id="bigPhoto" class="row">

        </div>
        <div id = "listPhotos" class = "row">
          <h3 class="text-center">Page en développement</h3>
          <p class="text-center">Bientôt ici une liste de photos de l'équipe de foot de l'étoile Saint-Laurent</p>
        </div>
    </div>

    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>
    <script src="js/gestion_photos.js"></script>
</body>

</html>
