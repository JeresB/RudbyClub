<?php
session_start();

$page = "Challenge Paul Vaillant";
$lien = "../challengePaulVaillant.php";
$breadcrumb = "Challenge Paul Vaillant";
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
                    Organisé tous les ans, le challenge <strong>Paul Vaillant</strong> 
                    est un tournoi en salle pour les catégories U11 et U13.
                    <h5><strong>Edition 2016</strong></h5>
                    
                    <img class = "img-responsive thumbnail" src="images/CPV-E2016.jpg">
                    <br>
                    Samedi 20 février avait lieu dans la halle du Petit Kerzu le 12ème challenge Paul Vaillant.
                    <br><br>
                    Cette année encore 16 équipes U11 et autant de U13 se sont opposées tout au long de la journée.
                    <br><br>
                    Les finales ont permis à l'Etoile Saint-Laurent de vaincre la VGA Bohars 
                    sur le plus petit des scores de 1 à 0 en U11. En U13 c'est l'AS Cavale-Blanche
                    qui l'emporte sur le score sans appel de 5 à 1 face au FC Le Relecq.
                    <br>
                    Les 3ème et 4ème place reviennent au PL Bergot et aux Gars du Reun en U11, 
                    à l'Etoile Saint-Laurent 2 devant la 1 en U13.
                    <br><br>
 
                    Suite au décompte des points, l'Etoile Saint-Laurent remporte le Challenge Paul Vaillant.
                    <br>
                    A la fin des rencontres les filles de Paul VAILLANT et la petite Mathilde 
                    remettaient les récompenses aux équipes finalistes du tournoi.
                    <br><br>
                    Merci aux participants et à tous les bénévoles.
                    Coup de chapeau aux jeunes qui se sont relayés à l'arbitrage.
 
                    <hr>
                    <h5><strong>Edition 2015</strong></h5>
                    <img class = "img-responsive thumbnail" src="images/CPV-E2015.jpg">
                    <br>
                    Samedi 21 février avait lieu dans la halle du Petit Kerzu le 11ème challenge Paul Vaillant.
                    <br><br>
                    Cette édition a vu 16 équipes U11 et autant de U13 s'opposer tout au long de la journée.
                    <br><br>
                    Les finales ont permis à la Saint-Pierre de Milizac de vaincre l'AS Brestoise sur le score
                    de 5 à 0 en U11, en U13 c'est le FC Le Relecq qui l'emporte après une séance de tirs au but face au PL Bergot.
                    <br><br>
                    A la fin des rencontres Marie-Claude VAILLANT remettait les récompenses aux équipes gagnantes
                    et le challenge au FC LE RELECQ vainqueur du tournoi.
                    <br><br>
                    Merci aux participants et à tous les bénévoles.
 
                    <hr>
                    <h5><strong>Edition 2014</strong></h5>
                    
                    Le challenge Paul Vaillant s'est déroulé le <strong>samedi 15 mars</strong> au complexe du Petit Kerzu.
                    <br><br>
                    Merci à tous les clubs qui ont répondu à l'invitation et participé à cette journée.
                    <br><br>
                    Merci aussi à tous les bénévoles et notamment aux joueurs du groupement des catégories U 15 à U19 et séniors 
                    de St Laurent pour leur implication aux différents postes. Merci aussi aux parents qui sont partie prenante dans cette journée.
                    <br><br>
                    Merci aussi à Marie-Claude VAILLANT pour sa disponibilité.
                    <br><br>
                    Sur le plan sportif,<br>
                    En catégorie U13, victoire du Stade Brestois sur La Légion St Pierre par 1 à 0.<br>
                    En catégorie U11, victoire de l'AS Cavale Blancehe sur l'AS Brest par 8 à 1.
                    <br><br>
                    Le challenge Paul Vaillant 2014 est remporté par l'AS CAVALE-BLANCHE 
                    <br>
                    <img class = "img-responsive thumbnail" src="images/CPV-E2014.jpg">
                    <hr>
                    
                    <h5><strong>Edition2013</strong></h5>
                    <div class = "row">
                        <div class = "col-xs-4">
                            <img class = "img-responsive thumbnail" src="images/CPV-E2013-1.jpg">
                        </div>
                        <div class = "col-xs-4">
                            <img class = "img-responsive thumbnail" src="images/CPV-E2013-2.jpg">
                        </div>
                        <div class = "col-xs-4">
                            <img class = "img-responsive thumbnail" src="images/CPV-E2013-3.jpg">
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