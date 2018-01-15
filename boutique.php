<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();
$page = "Boutique";
$lien = "../boutique.php";
$breadcrumb = "La Boutique";
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

        </div>
            

     
        
            <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Boutique ESL</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Sortie</a>
                    <a href="#" class="list-group-item">Entrainement</a>
                    <a href="#" class="list-group-item">Accessoires</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <?php 
                            $query = $pdo->prepare("SELECT * FROM item");
                            $query->execute();
                        ?>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php 
                                for ($i=0; $i < 3; $i++) {
                                    $row = $query->fetch();
                                    echo '<div class="item active">
                                        <img class="slide-image imageResponsive" src="'.$row['image'].'" alt="">
                                    </div>';
                                }
                                ?>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                        <br>
                    </div>

                </div>

                <div class="row">
                    <?php 
                        $query = $pdo->prepare("SELECT * FROM item");
                        $query->execute();

                        for ($i=0; $row = $query->fetch() ; $i++) {
                            echo '<div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail">
                                        <img src="'.$row['image'].'" alt="">
                                        <div class="caption">
                                            <h4 class="pull-right">'.$row['prix'].'€</h4>
                                            <h4><a href="'.$row['lien'].'">'.$row['nom'].'</a></h4>
                                            
                                            <p>'.$row['description'].'</p>
                                        </div>
                                        <div class="btn-group" role="group" aria-label="...">';
                                        if($_SESSION['admin'] == true) {
                                            echo "<form class='inline' action='edition_item.php' method='post'>
                                                    <input type='hidden' name='id' value='".$row['id']."' />
                                                    <input class='btn btn-default' type='submit' value='Editer' />
                                                </form>";
                                            }
                                          if($_SESSION['admin'] == true) {
                                            echo "<form class='inline pull-right' action='supprimer_item.php' method='post'>
                                                    <input type='hidden' name='id' value='".$row['id']."' />
                                                    <input class='btn btn-danger pull-right' type='submit' value='Supprimer' />
                                                </form>";
                                            }
                                        echo '
                                        </div>
                                    </div>
                                </div>';
                        } ?>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        
                        
                    </div>

                </div>
                <?php if($_SESSION['admin'] == true) {
                    echo "<a class='btn btn-info btn-block pull-right' href='ajouter_item.php'>Ajouter</a>";
                } ?>
                <button class="btn btn-primary btn-block">Bon de commande</button>
            </div>

        </div>

    </div>
    <!-- /.container -->
    
    <hr>

        <?php require_once('templates/footer.html'); ?>
        <?php require_once('templates/footer-copyright.html'); ?>
      
        <?php require_once('templates/footer-js.html'); ?>  

</body>

</html>
