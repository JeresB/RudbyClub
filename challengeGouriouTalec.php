<?php
session_start();

$page = "Challenge Gouriou-Talec";
$lien = "../challengeGouriouTalec.php";
$breadcrumb = "Challenge Gouriou-Talec";
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
            <div class = "col-md-8 col-md-offset-2">
                <div class = "panel panel-default">
                <div class = "panel-body">
                <p>
                    Organisé tous les ans lors du week-end de l'ascension, le challenge <strong>Alain Gouriou - 
                    Raymond Talec</strong> est un tournoi pour les catégories U11 et U13.

                    <hr>
                    <h5><strong>EDITION 2015</strong></h5>
    
                    Un grand merci à tous les clubs et à toutes les équipes qui ont participé et joué le jeu jusqu'au bout malgré
                    les conditions climatiques déplorables de cet après-midi.
                    Un grand merci aussi à tous ces dirigeants qui ont fait preuve de patience pour contenir tout ce petit monde.
                    <br><br>
                    Bravo au Stade Brestois vaincu 1 à 0 par ESL 1 en finale U11 et félicitations aux vainqueurs.
                    <br><br>
                    Félicitations au Plouzané AC vainqueur du SC Lannilis aux tirs au but.
                    <br><br>
                    Un grand merci également à toutes les personnes qui ont participé à l'organisation de ce tournoi,
                    que ce soit l'administratif depuis le départ, à l'intendance, les arbitres et tous les bénévoles présents.
                    Ce potentiel de personnes montre bien que tout le monde est là pour que nous avancions tous ensemble.
                    <br><br>
                    <hr>
                    <h5><strong>EDITION 2014</strong></h5>
                    Le tournoi 2014 s'est déroulé par un temps clément au stade Pierre Corlay le jeudi 29 mai.
                    <br><br>
                    15 équipes étaient présentes en U11. Défection de dernière minute de La Cavale-Blanche.<br>
                    Vainqueur du tournoi principal Etoile Saint-Laurent 1 face au SC Lannilis sur le score de 1 à 0.
                    <br><br>
                    12 équipes étaient présentes U13. Victoire de Ploufragan sur La Cavale-Blanche sur le score de 3 à 1.
                    <br><br>
                    Merci à tous les clubs qui ont répondu favorablement à notre invitation.
                    Nous sommes désolés pour ceux que nous n'avons pu retenir.
                    <br><br>
                    Merci aussi à tous les bénévoles sans qui ce tournoi ne pourrait avoir lieu.
                    Beaucoup de séniors étaient présents pour l'arbitrage.
                    Notre club remonte et revit par leur résultat.
                    Ils sont venus aider la relève.
                    Merci encore et bravo à tous.
                    <br><br>
                    <div class = "thumbnail">
                        <p class = "text-center">Les vainqueurs : Ploufragan en U13 et Saint-Laurent en U11</p>
                        <img class = "img-responsive" src="images/CGT-E2014.jpg">
                    </div>
                    <hr>
                    <h5><strong>Edition2013</strong></h5>

                    Organisé au stade Pierre Corlay le jeudi 9 mai, le tournoi a vu s'affronter 17 équipes U11 et U13.
                    <br><br>
                    En U13 victoire de l'EA Saint Renan sur l'Etoile Saint-Laurent.<br>
                    En U11 victoire de Pleyben sur L'Etoile Saint-Laurent.
                    <br><br>
                    Très bonne ambiance tout au long du tournoi avec des matchs pour les U9 locaux pendant la pause méridienne.
                    <br><br>
                    Merci à tous les clubs pour leur participation ainsi qu'aux bénévoles pour l'organisation.
                    <br><br>
                    <div class = "row">
                        <div class = "col-md-3">
                            <img class = "img-responsive thumbnail" src="images/CGT-E2013-1.jpg">
                        </div>
                        <div class = "col-md-3">
                            <img class = "img-responsive thumbnail" src="images/CGT-E2013-2.jpg">
                        </div>
                        <div class = "col-md-3">
                            <img class = "img-responsive thumbnail" src="images/CGT-E2013-3.jpg">
                        </div>
                        <div class = "col-md-3">
                            <img class = "img-responsive thumbnail" src="images/CGT-E2013-4.jpg">
                        </div>
                    </div>
                </p>
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