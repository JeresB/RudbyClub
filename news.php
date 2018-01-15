<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();
$page = "Dernières Nouvelles";
$lien = "../news.php";
$breadcrumb = "Dernières Nouvelles";
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
            <?php
                $query = $pdo->prepare("SELECT * FROM news");
                $query->execute();
            ?>
            <div class = "col-md-10 col-md-offset-1">

                    <?php
                        for ($i=0; $row = $query->fetch() ; $i++) {
                            echo '<div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">'.$row['titre'].'</h3>
                                </div>
                                <div class="panel-body">
                                    <img class="img-responsive" style="max-width: 100%;" src="'.$row['image'].'" alt="Image News" />
                                    <hr>
                                    '.htmlspecialchars_decode($row['texte']).'
                                </div>
                                <div class="panel-footer">Publication : '.$row['date'];


                            if($_SESSION['admin'] == true) {
                            echo "<form class='inline' action='edition_news.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."' />
                                    <td><input class='btn btn-default' type='submit' value='Editer' /></td>
                                </form>";
                            }

                            if($_SESSION['admin'] == true) {
                            echo "<form class='inline pull-right' action='supprimer_news.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['id']."' />
                                    <td><input class='btn btn-danger pull-right' type='submit' value='Supprimer' /></td>
                                </form>";
                            }
                            echo '</div></div>';
                            echo '<hr>';
                        }

                        if($_SESSION['admin'] == true) {
                        echo "<a class='btn btn-info btn-block pull-right' href='ajouter_news.php'>Ajouter</a>";
                        }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>
</body>
</html>
