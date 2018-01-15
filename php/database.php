<?php
require_once('constantes.php');

function dbConnect() {
  try {
    $pdo = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
  } catch (PDOException $e) {
    error_log('Connexion échouée : '.$e->getMessage());
    return false;
  }
  return $pdo;
}

function dbRequestNews($db, $id = -1) {
  try {
    $request = "SELECT * FROM news ";

    if ($id != -1) $request .= "WHERE id = :id ";

    $query = $db->prepare($request);

    if ($id != -1) $query->bindParam(":id", $id, PDO::PARAM_INT);

    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    error_log('Requête échouée : '.$e->getMessage());
    return false;
  }

  return $row;
}

function dbRequestEquipe($db, $id = 0) {
  try {
    $request = "SELECT * FROM equipe WHERE nom_equipe = :nom ";

    $query = $db->prepare($request);
    $query->bindParam(":nom", $id, PDO::PARAM_INT);

    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    error_log('Requête échouée : '.$e->getMessage());
    return false;
  }

  return $row;
}

function dbRequestResponsable($db, $id = 0) {
  try {
    $request = "SELECT * FROM responsable, equipe_responsable WHERE responsable.id = equipe_responsable.id AND equipe_responsable.nom_equipe = :team";

    $query = $db->prepare($request);
    $query->bindParam(":team", $id, PDO::PARAM_INT);

    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    error_log('Requête échouée : '.$e->getMessage());
    return false;
  }

  return $row;
}

function dbRequestMembres($db, $id = 0) {
  try {
    $request = "SELECT membre.nom_membre, membre.prenom_membre, membre.nom_equipe, equipe.nom_equipe FROM membre, equipe WHERE membre.nom_equipe = equipe.nom_equipe AND membre.nom_equipe = :team";

    $query = $db->prepare($request);
    $query->bindParam(":team", $id, PDO::PARAM_INT);

    $query->execute();
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    error_log('Requête échouée : '.$e->getMessage());
    return false;
  }

  return $row;
}

function dbAddCommentaire($db, $commentaire, $id_image) {
  try {
    $requete = "INSERT INTO commentaire (id, id_image, commentaire) VALUES (NULL, :id_image, :commentaire)";
    $query = $db->prepare($requete);
    $query->bindParam(":id_image", $id_image, PDO::PARAM_INT, 5);
    $query->bindParam(":commentaire", $commentaire, PDO::PARAM_STR, 255);
    $query->execute();

  } catch (PDOException $e) {
    error_log('Ajout de commentaire échouée : '.$e->getMessage());
    return false;
  }

  return true;
}

//$db = dbConnect();
