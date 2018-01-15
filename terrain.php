<?php
session_start();

$page = "Terrains";
$lien = "../terrain.php";
$breadcrumb = "Terrains";
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

        <div class = "row">
            <div class = "col-md-8 col-md-offset-2 col-xs-12">
                <h3 class="text-center">Le stade Pierre Corlay</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1208.0745891736403!2d-4.493043073917615!3d48.41189570027412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDI0JzQyLjkiTiA0wrAyOSczMS4zIlc!5e1!3m2!1sfr!2sfr!4v1491690973540" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class = "col-md-4 col-xs-12">
                <h3 class="text-center">Le terrain de Lanvian</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702.4898217922073!2d-4.485482787985754!3d48.4146685424485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDI0JzUyLjgiTiA0wrAyOScwMi4wIlc!5e1!3m2!1sfr!2sfr!4v1491691157031" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class = "col-md-4 col-xs-12">
                <h3 class="text-center">Le Spernot</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2030.7652309383536!2d-4.50399428507644!3d48.41958683945716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDI1JzEwLjUiTiA0wrAzMCcwNi41Ilc!5e1!3m2!1sfr!2sfr!4v1491691177719" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class = "col-md-4 col-xs-12">
                <h3 class="text-center">Lanroze</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2030.7352693781263!2d-4.491799785076479!3d48.42033683940478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDI1JzEzLjIiTiA0wrAyOScyMi42Ilc!5e1!3m2!1sfr!2sfr!4v1491691196557" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>

</body>

</html>
