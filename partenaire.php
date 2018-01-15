<?php
session_start();

$page = "Nos Partenaires";
$lien = "../partenaire.php";
$breadcrumb = "Nos Partenaires";
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
            <div class = "col-md-6 col-xs-12">
                <a href = "http://www.breizh-poncage.com/index.htm" class = "thumbnail" target = "__blank"><img src="images/breizh-ponçage.png"></a>
            </div>
            <div class = "col-md-6 col-xs-12">
                <a href = "http://www.intermarche.com/magasin_accueil/steren-brest-29200" class = "thumbnail" target = "__blank"><img src="images/intermarché.jpg"></a>
            </div>
            <a href = "/images/PartenairesSponsors.jpg" target = "__blank" class = "col-lg-12">
              <div id = "sponsor">
                  <img style="display: block; width: 100%; min-height: 500px;" src="/images/PartenairesSponsors.jpg"></img>
              </div>  
            </a>
        </div>
    </div>
            
    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>
      
    <?php require_once('templates/footer-js.html'); ?> 

</body>

</html>
