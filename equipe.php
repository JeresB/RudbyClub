<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();

$page = "Equipe";
$lien = "../equipe.php";
$breadcrumb = "Equipe";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('templates/head.html'); ?>
    <title><?php echo $page; ?></title>
</head>

<body>
    <?php require_once('templates/navbar.html'); ?>

    <div class = "container-fluid">
    <?php require_once('templates/breadcrumb.php'); ?>
    <?php require_once('templates/alertAdmin.php'); ?>


        <?php
            $query = $pdo->prepare("SELECT * FROM equipe WHERE nom_equipe LIKE 'senior%' LIMIT 2");
            $query->execute();

       		for ($i = 0; $row = $query->fetch(); $i++) {
       		    if($i == 0) {
       		        echo '<div class="row"><div class="col-md-12 col-xs-12">
    	                    <img class="mx-auto" id = "image" src="'.$row['image'].'" alt = "Equipe"></img>
    	               </div></div>';
       		    }
    	    ?>
    	    <div class="row">

            <div class="col-md-6">
        	    <div class="info-match">
            	<table class="table table-hover " id="task-table">
            		<tbody>
						<tr><h1 class="text-center"><?php echo $row['nom_equipe']; ?><h1></h1></tr>
						<tr>
						    <div id="buttonDiv" >
                                <center><a href="<?php echo $row['classement']; ?>" target="_blank" class="btn btn-primary ">Classement</a></center>
                            </div>
						</tr>
						<tr>
						    <fieldset><h4 class="mt-80">
						        <form action="edition_equipe.php?page_prec=equipe.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['nom_equipe']; ?>" />
                                    <?php if($_SESSION['admin'] == true) {
                                       echo '<button class="btn btn-default" type="submit">Informations match <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>';
                                    } else {
                                        echo '<p>Informations Match';
                                    }?>

                                </form>
                            </h4></fieldset>
						</tr>

						<tr>
							<td>Adversaire</td>
							<td><?php echo $row['adversaire']; ?></td>
                            <td></td>
						</tr>
						<tr>
							<td>Lieu</td>
							<td><?php echo $row['lieu_match']; ?></td>
                            <td></td>
						</tr>
                        <tr>
							<td>Heure</td>
							<td><?php echo $row['rencontre']; ?></td>
                            <td></td>
						</tr>
                        <tr>
							<td>Rendez-vous</td>
							<td><?php echo $row['lieu_rdv']; ?></td>
                            <td></td>
						</tr>
                        <tr>
							<td>Heure</td>
							<td><?php echo $row['rdv']; ?></td>
                            <td></td>
						</tr>
						<?php
                    		$queryresponsable = $pdo->prepare("SELECT * FROM responsable INNER JOIN equipe_responsable ON responsable.id = equipe_responsable.id WHERE nom_equipe = '".$row['nom_equipe']."'");
                    		$queryresponsable->execute();

                  			for ($i = 0; $rowresponsable = $queryresponsable->fetch(); $i++) {
                    				if($i == 0) {
                    				    if($_SESSION['admin'] == true) {
                    				        $th = '<form action="edition_responsables.php?page_prec=equipe.php" method="post">
                                                    <input type="hidden" name="id" value="'.$row['nom_equipe'].'" />
                                                    <button class="btn btn-default" type="submit">Responsables <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                </form>';
                    				    } else $th ='Responsables';
                    				}
                    				else $th = '';
                    				echo '<tr><td>'.$th.'</td>
                    					<td>'.$rowresponsable['prenom_responsable'].' '.$rowresponsable['nom_responsable'].'</td>
                    					<td style="font-size: 12px; vertical-align: bottom;">'.$rowresponsable['numero'].'</td></tr>';
                    		}

                    		if($i == 0) {
                    		    echo '<tr><td><form action="edition_responsables.php?page_prec=equipe.php" method="post">
                                                    <input type="hidden" name="id" value="'.$row['nom_equipe'].'" />
                                                    <button class="btn btn-default" type="submit">Responsables <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                </form></td></tr>';
                    		}
                			?>
						</tbody>
					</table>
            </div>
            <!-- Tableau des joueurs -->
            <fieldset>
                <h4>
                    Joueurs
                    <?php if($_SESSION['admin'] == true) { ?>
                    <form class="float-right" action="edition_joueurs.php?page_prec=equipe.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['nom_equipe']; ?>" />
                        <input class="btn btn-default mb-2" type="submit" value="Editer"/>
                    </form>
                    <?php } ?>
                </h4>
            </fieldset>
            <table class="table table-hover" id="task-table">
            	<?php
            		$querymembre = $pdo->prepare("SELECT * FROM membre INNER JOIN equipe ON equipe.nom_equipe = membre.nom_equipe WHERE membre.nom_equipe = '".$row['nom_equipe']."'");
                    $querymembre->execute();
                ?>
						<tbody>
							<?php
							for ($i = 0; $rowmembre = $querymembre->fetch(); $i++) {
								$rang = $i + 1;
								echo '<tr><td>'.$rang.'</td>
									<td>'.$rowmembre['nom_membre'].' '.$rowmembre['prenom_membre'].'</td></tr>';
							}
							?>
						</tbody>
					</table>
         </div>
          <?php } ?>

          </div>
          </div>

        <!-- Coupes -->
        <div class="flex-container">

            <div id="buttonDiv" class="flex-item"><button type="button" class="btn btn-primary">Coupe de France</button></div>
            <div id="buttonDiv" class="flex-item"><button type="button" class="btn btn-primary">Coupe de Bretagne</button></div>
            <div id="buttonDiv" class="flex-item"><button type="button" class="btn btn-primary">Coupe du conseil</button></div>
            <div id="buttonDiv" class="flex-item"><button type="button" class="btn btn-primary">Coupe du district</button></div>
            <div id="buttonDiv" class="flex-item"><button type="button" class="btn btn-primary">Challenge 29</button></div>

        </div>
    </div>
<div id = "loadEquipe" class = "row">

</div>
    <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>

<script src="js/equipe.js"></script>

</body>
</html>
