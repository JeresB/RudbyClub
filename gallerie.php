<!doctype html>
<html lang="fr">
  <?php include_once('templates/head.html'); ?>
  <link href="../css/custom.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
  <body>
    <?php include_once('templates/navbar.php'); ?>
    <?php //include_once('templates/message.php'); ?>

    <div class="ui container">
      <h1 class="ui center aligned header"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallerie photos</h1>
      <div class="ui stacked segment">
        <div id="Glide" class="glide">
          <div class="glide__arrows">
            <button class="glide__arrow prev" data-glide-dir="<">prev</button>
            <button class="glide__arrow next" data-glide-dir=">">next</button>
          </div>

          <div class="glide__wrapper">
            <ul class="glide__track">
              <li class="glide__slide"><img class="img-resp" src="images/co.png" /></li>
              <li class="glide__slide"><img class="img-resp" src="images/paysage3.jpg" /></li>
              <li class="glide__slide"></li>
            </ul>
          </div>

          <div class="glide__bullets"></div>
        </div>
      </div>
    </div>
  </body>

  <?php include_once('templates/footer.html'); ?>
  <script src="js/glide.min.js"></script>

  <script>
    $("#Glide").glide({
        type: "carousel"
    });
  </script>
</html>
