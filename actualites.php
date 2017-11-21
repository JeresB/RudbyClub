<?php
require_once('helpers/bdd_connect.php');

$requete = $rudby_bdd->prepare("SELECT * FROM news");
$requete->execute();
$all_news = $requete->fetchAll();

?>

<!doctype html>
<html lang="fr">
  <?php include_once('templates/head.html'); ?>
  <body>
      <?php include_once('templates/navbar.php'); ?>
      <?php //include_once('templates/message.php'); ?>

      <div class="ui container">
        <h1 class="ui center dividing aligned header"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</h1>

        <?php foreach ($all_news as $news) { ?>
          <div class="ui piled segments">
            <div class="ui blue inverted segment">
              <?=$news['titre'] ?>
            </div>
            <div class="ui center aligned segment">
              <img class="img-resp-max" alt="Image Actualités" src="images/<?=$news['image'] ?>" />
            </div>
            <div class="ui segment">
              <?=$news['texte'] ?>
            </div>
            <div class="ui segment">
              <?=$news['date'] ?>
            </div>
          </div>
          <div class="ui divider"></div>
        <?php } ?>
      </div>
  </body>
  <?php include_once('templates/footer.html'); ?>
</html>
