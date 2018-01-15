<?php 
if($_SESSION['admin'] == true) {
echo '<div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="alert alert-success text-center">
                <span>Connecté en tant qu\'<strong>administrateur</strong> !</span>
            </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <form action="php/deco.php" method="post">
                <input type="hidden" name="page" value="'.$lien.'" />
                <button class="alert alert-danger full" type="submit">Déconnexion</button>
            </form>
        </div>
    </div>';
}
?>