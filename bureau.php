<?php
session_start();

$page = "Bureau";
$lien = "../bureau.php";
$breadcrumb = "Bureau";
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fonction</th>
                                <th>Nom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Présidents</td>
                                <td>
                                    GALERON Jean-Jacques</br>
                                    JAOUEN Patrick   
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Secrétaire</td>
                                <td>CHAMBEL Alain</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Trésorier</td>
                                <td>ZANGER Jean-Claude</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Secrétaire-adjoint</td>
                                <td>LEGOFF Gérard</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Trésorier adjoint</td>
                                <td>MEAUDE Christian</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Responsable Matériel</td>
                                <td>NONET Stéphane</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Membres</td>
                                <td>
                                    COUNY Jean-Luc</br>
                                    COADOU André</br>
                                    CORFA Ronan</br>
                                    BODENES Gilbert</br>
                                    JOUAN Yvon</br>
                                    ZANGER Jeannette</br>
                                    BIZIEN Charles</br>
                                    LECOINTRE Thomas</br>
                                    PERON Pierre</br>
                                    NICOLAS Thierry</br>
                                    LOSSEC Jean-Michel</br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div><object data="pdf/Organigramme 2015-2016.pdf" type="application/pdf" width="100%" height="600"></object></div>
            </div>
        </div>
            

        <hr>

        <?php require_once('templates/footer.html'); ?>
        <?php require_once('templates/footer-copyright.html'); ?>
          
        <?php require_once('templates/footer-js.html'); ?>  

</body>

</html>
