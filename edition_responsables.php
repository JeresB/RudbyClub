<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$page = "Edition responsables";
$lien = "../equipe.php";
$breadcrumb = "Edition responsables";

if(isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $phone = htmlspecialchars($_POST['phone']);
    $equipe = htmlspecialchars($_POST['equipe']);

    $mutationAddResponsable = $pdo->prepare("INSERT INTO responsable (nom_responsable, prenom_responsable, numero) VALUES (:nom, :prenom, :phone)");

    $mutationAddResponsable->bindParam(":nom", $nom, PDO::PARAM_STR);
    $mutationAddResponsable->bindParam(":prenom", $prenom, PDO::PARAM_STR);
    $mutationAddResponsable->bindParam(":phone", $phone, PDO::PARAM_STR);
    $mutationAddResponsable->execute();

    $getLastID = $pdo->prepare("SELECT MAX(id) as newID FROM responsable");
    $getLastID->execute();

    $newID = $getLastID->fetch();

    $mutationLinkResponsableEquipe = $pdo->prepare("INSERT INTO equipe_responsable (nom_equipe, id) VALUES (:equipe, :id)");
    $mutationLinkResponsableEquipe->bindParam(":equipe", $_POST['id'], PDO::PARAM_STR);
    $mutationLinkResponsableEquipe->bindParam(":id", $newID['newID']);

    $mutationLinkResponsableEquipe->execute();
}

if(isset($_POST['id_responsable'])) {
    $id = intval($_POST['id_responsable']);

    $mutationDeleteEquipe_Responsable = $pdo->prepare("DELETE FROM equipe_responsable WHERE id = :id");
    $mutationDeleteEquipe_Responsable->bindParam(":id", $id);
    $mutationDeleteEquipe_Responsable->execute();

    $mutationDeleteResponsable = $pdo->prepare("DELETE FROM responsable WHERE id = :id");
    $mutationDeleteResponsable->bindParam(":id", $id);
    $mutationDeleteResponsable->execute();
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
        <table class="table table-hover" id="task-table">
            <?php
            	$queryresponsable = $pdo->prepare("SELECT * FROM responsable INNER JOIN equipe_responsable ON responsable.id = equipe_responsable.id WHERE nom_equipe = '".$_POST['id']."'");
                $queryresponsable->execute();
            ?>
			<tbody>
			<?php
				for ($i = 0; $rowresponsable = $queryresponsable->fetch(); $i++) {
					$rang = $i + 1;
					echo '<tr><td>'.$rang.'</td>
						<td>'.$rowresponsable['nom_responsable'].' '.$rowresponsable['prenom_responsable'].'</td>
						<td>'.$rowresponsable['numero'].'</td>
						<td>
						<form action="edition_responsables.php?page_prec='.$_GET['page_prec'].'" method="post">
                            <input type="hidden" name="id_responsable" value="'.$rowresponsable['id'].'" />
                            <input type="hidden" name="id" value="'.$_POST['id'].'" />
                            <button class="btn btn-danger mb-2 float-right" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form></td></tr>';
				}

			?>
			</tbody>
		</table>
		<form action="edition_responsables.php?page_prec=<?= $_GET['page_prec'] ?>" method="post">
		    <div class="row">
		        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		            <input class="form-control" type="text" name="nom" placeholder="Nom" />
		        </div>
		        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		            <input class="form-control" type="text" name="prenom" placeholder="Prenom" />
		        </div>
		        <div class="col-md-4 col-sm-6 col-xs-12 form-group">
		            <input class="form-control" type="text" name="phone" placeholder="Téléphone" />
		        </div>
		    </div>
            <input type="hidden" name="equipe" value="<?php echo $_POST['id']; ?>" />
            <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>" />
            <button class="btn btn-info btn-block" type="submit">Ajouter <i class="fa fa-plus" aria-hidden="true"></i></button>
        </form>
    </div>

    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>

</body>

</html>
