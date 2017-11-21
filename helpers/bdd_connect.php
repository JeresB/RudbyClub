<?php
require_once('constantes.php');
$rudby_bdd = NULL;

try {
    $rudby_bdd = new PDO('mysql:host='.BDD_HOST.';dbname='.BDD_NAME.';charset=utf8', BDD_LOGIN, BDD_PASSWORD);
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage() . "<br/>";
    die();
}
?>
