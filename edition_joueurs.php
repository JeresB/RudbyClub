<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$page = "Edition membres";
$lien = "../equipe.php";
$breadcrumb = "Edition membres";

if(isset($_POST['nom']) && isset($_POST['prenom'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $equipe = htmlspecialchars($_POST['equipe']);

    $mutationAddPlayer = $pdo->prepare("INSERT INTO membre (nom_membre, prenom_membre, nom_equipe) VALUES (:nom, :prenom, :equipe)");

    $mutationAddPlayer->bindParam(":nom", $nom, PDO::PARAM_STR);
    $mutationAddPlayer->bindParam(":prenom", $prenom, PDO::PARAM_STR);
    $mutationAddPlayer->bindParam(":equipe", $equipe, PDO::PARAM_STR);
    $mutationAddPlayer->execute();
}

if(isset($_POST['id_player'])) {
    $id = intval($_POST['id_player']);

    $mutationDeletePlayer = $pdo->prepare("DELETE FROM membre WHERE id = :id");
    $mutationDeletePlayer->bindParam(":id", $id);
    $mutationDeletePlayer->execute();
}

if (isset($_POST['nom_update']) && isset($_POST['prenom_update'])) {
    $id = intval($_POST['id_player_update']);
    $nom = $_POST['nom_update'];
    $prenom = $_POST['prenom_update'];

    echo '---------------- ICI --------------------';
    echo $id;
    echo $nom;
    echo $prenom;
    $mutationUpdatePlayer = $pdo->prepare("UPDATE membre SET nom_membre = :nom, prenom_membre = :prenom WHERE id = :id");
    $mutationUpdatePlayer->bindParam(":nom", $nom);
    $mutationUpdatePlayer->bindParam(":prenom", $prenom);
    $mutationUpdatePlayer->bindParam(":id", $id);

    $resultat = $mutationUpdatePlayer->execute();
    echo $resultat;
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

    <div class = "container" style="margin-top: 70px;">
    <?php require_once('templates/alertAdmin.php'); ?>
    <div class="page-header">
        <h1>Equipe : <?php echo $_POST['id']; ?><a href="<?= $_GET['page_prec'] ?>" class="btn btn-default float-right"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></h1>
    </div>
        <div>
          <?php
          if (isset($_POST['id_player_add'])) { ?>
            <form action="edition_joueurs.php?page_prec=<?= $_GET['page_prec'] ?>" method="post">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input class="form-control" type="text" name="nom_update" value="<?=$_POST['nom_add'] ?>" placeholder="Nom" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                        <input class="form-control" type="text" name="prenom_update" value="<?=$_POST['prenom_add'] ?>" placeholder="Prenom" />
                    </div>
                </div>
                <input type="hidden" name="equipe" value="<?=$_POST['id']; ?>" />
                <input type="hidden" name="id" value="<?=$_POST['id']; ?>" />
                <input type="hidden" name="id_player_update" value="<?=$_POST['id_player_add']; ?>" />
                <button class="btn btn-info btn-block" type="submit">Modifier <i class="fa fa-pencil" aria-hidden="true"></i></button>
              </form>

          <?php
          }
          ?>
        </div>
        <table class="table table-hover" id="task-table">
          <thead>
            <th>#</th>
            <th>Nom</th>
            <th class="text-center">Modifier</th>
            <th class="text-center">Effacer</th>
          </thead>
            <?php
            	$querymembre = $pdo->prepare("SELECT * FROM membre INNER JOIN equipe ON equipe.nom_equipe = membre.nom_equipe WHERE membre.nom_equipe = '".$_POST['id']."'");
                $querymembre->execute();
            ?>
			<tbody>
			<?php
				for ($i = 0; $rowmembre = $querymembre->fetch(); $i++) {
					$rang = $i + 1;
					echo '<tr><td>'.$rang.'</td>
						<td>'.$rowmembre['nom_membre'].' '.$rowmembre['prenom_membre'].'</td>
            <td><form action="edition_joueurs.php?page_prec='.$_GET['page_prec'].'" method="post">
                    <input type="hidden" name="nom_add" value="'.$rowmembre['nom_membre'].'" />
                    <input type="hidden" name="prenom_add" value="'.$rowmembre['prenom_membre'].'" />
                    <input type="hidden" name="id_player_add" value="'.$rowmembre['id'].'" />
                    <input type="hidden" name="id" value="'.$_POST['id'].'" />
                    <button class="btn btn-primary mb-2 btn-block" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                </form>
            <td>
						<form action="edition_joueurs.php?page_prec='.$_GET['page_prec'].'" method="post">
                            <input type="hidden" name="id_player" value="'.$rowmembre['id'].'" />
                            <input type="hidden" name="id" value="'.$_POST['id'].'" />
                            <button class="btn btn-danger mb-2 btn-block" type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </form></td></tr>';
				}

			?>
			</tbody>
		</table>
		<form action="edition_joueurs.php?page_prec=<?= $_GET['page_prec'] ?>" method="post">
		    <div class="row">
		        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
		            <input class="form-control" type="text" name="nom" placeholder="Nom" />
		        </div>
		        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
		            <input class="form-control" type="text" name="prenom" placeholder="Prenom" />
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
