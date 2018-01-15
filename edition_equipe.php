<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$page = "Edition equipe";
$lien = "../equipe.php";
$breadcrumb = "Edition equipe";

if(isset($_POST['submit'])) {
    $adversaire = htmlspecialchars($_POST['adversaire']);
    $lieu_match = htmlspecialchars($_POST['lieu_match']);
    $heure_match = htmlspecialchars($_POST['heure_match']);
    $lieu_rdv = htmlspecialchars($_POST['lieu_rdv']);
    $heure_rdv = htmlspecialchars($_POST['heure_rdv']);
    $classement = htmlspecialchars($_POST['classement']);
    $image = htmlspecialchars($_POST['image']);

    $mutationUpdateEquipe = $pdo->prepare("UPDATE equipe SET
    adversaire = :adversaire,
    lieu_match =  :lieu_match,
    rencontre = :heure_match,
    lieu_rdv = :lieu_rdv,
    rdv = :heure_rdv,
    classement = :classement,
    image = :image

    WHERE  nom_equipe = :equipe");

    $mutationUpdateEquipe->bindParam(":adversaire", $adversaire, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":lieu_match", $lieu_match, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":heure_match", $heure_match, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":lieu_rdv", $lieu_rdv, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":heure_rdv", $heure_rdv, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":classement", $classement, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":image", $image, PDO::PARAM_STR);
    $mutationUpdateEquipe->bindParam(":equipe", $_POST['id'], PDO::PARAM_STR);
    $mutationUpdateEquipe->execute();

    header('Location: '.$_GET['page_prec']);
}
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
    <?php require_once('templates/alertAdmin.php'); ?>
    <div class="page-header">
        <h1>Equipe : <?php echo $_POST['id']; ?><a href="<?= $_GET['page_prec'] ?>" class="btn btn-default float-right"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></h1>
    </div>
        <?php
        	$query = $pdo->prepare("SELECT * FROM equipe WHERE nom_equipe = '".$_POST['id']."'");
            $query->execute();

            $row = $query->fetch();
		?>
		<div class="row">
		    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
		        <form action="edition_equipe.php?page_prec=<?= $_GET['page_prec'] ?>" method="post">
		            <div class="form-group">
                        <input type="text" class="form-control" name="adversaire" placeholder="Adversaire" value="<?php echo $row['adversaire']; ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lieu_match" placeholder="Lieu du match" value="<?php echo $row['lieu_match']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="heure_match" placeholder="Heure du match" value="<?php echo $row['rencontre']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lieu_rdv" placeholder="Lieu du rdv" value="<?php echo $row['lieu_rdv']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="heure_rdv" placeholder="Heure du rdv" value="<?php echo $row['rdv']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="classement" placeholder="URL vers le classement" value="<?php echo $row['classement']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="image" placeholder="images/nom.format" value="<?php echo $row['image']; ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
		            <button class="btn btn-info" name="submit" type="submit">Sauvegarder</button>
		        </form>
		    </div>
		</div>
    </div>

    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>

</body>

</html>
