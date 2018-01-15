<?php
session_start();
require_once('php/constantes.php');
require_once('php/database.php');

$pdo = dbConnect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Club of soccer of l'étoile de Saint Laurent Brest">
  <meta name="author" content="Development by digital design">

  <title>Etoile Saint-Laurent</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="css/carousel.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
  <!-- Navigation -->
  <?php require_once('templates/navbar.html'); ?>

  <!-- Carousel ------------------------------------------------------ -->
  <div id="myCarousel" class="carousel fade-carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="images/slidefoot1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Bienvenue sur le site de l'étoile Saint Laurent.</h1>
            <p>Ce site a pour but de vous présenter la section football de l'Etoile Saint-Laurent et de vous tenir au courant de son actualité.</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="images/slide2Carousel.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Le foot pour tous.</h1>
            <p> La section football  de l’Étoile Saint-Laurent propose la pratique du football pour toutes les catégories d’âge à partir de 6 ans.</p>
            <!--              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          -->            </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="images/slide3Carousel.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Les terrains.</h1>
            <p> Stade Pierre Corlay ( Terrain principal et Siège de la section)  , terrains municipaux : Lanroze, Lanvian, Le Spernot.</p>
            <p><a class="btn btn-lg btn-primary" href="terrain.php" role="button">Emplacements</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->

  <!-- EXPLICATION DU CLUB -->
  <div class="container">
    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="row" id="partenaire">
        <div class="col-md-3 col-sm-6 col-xs-6">
          <a href="partenaire.php" class="thumbnail">
            <img src="images/breizh-ponçage.png" alt="breizh-ponçage image">
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <a href="partenaire.php" class="thumbnail">
            <img src="images/intermarché.jpg" alt="intermarché image">
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <a href="partenaire.php" class="thumbnail">
            <img src="images/villedebrest.png" alt="ville de brest image">
          </a>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <a href="partenaire.php" class="thumbnail">
            <img src="images/carrefourcity.jpg" alt="carrefour city image">
          </a>
        </div>
      </div>
    </div>
  </div>
    <hr>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-4">
          <div>
              <h2>Agenda <i class="fa fa-address-book" aria-hidden="true"></i></h2>
              <iframe
                src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%239999ff&amp;src=eslbrestfoot%40gmail.com&amp;color=%230F4B38&amp;ctz=Europe%2FParis"
                style="border:solid 1px #777" height="300" frameborder="0" scrolling="no"></iframe>
          </div>
          <div>
            <h2>Photos <i class="fa fa-picture-o" aria-hidden="true"></i></h2>
            <!-- Carousel ---------------------------------------------------------->
            <div id="myCarouselbis" class="carousel fade-carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarouselbis" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouselbis" data-slide-to="1"></li>
                <li data-target="#myCarouselbis" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="first-slide" src="images/u15.jpg" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <b>U15</b>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="second-slide" src="images/u17.jpg" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <b>U17</b>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="images/u19.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <b>U19</b>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarouselbis" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarouselbis" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- /.carousel -->
          </div>
        </div>
        <div class="col-xs-12 col-md-4">
          <h2>Actualités</h2>

          <?php
            $query = $pdo->prepare("SELECT * FROM news LIMIT 3");
            $query->execute();

          for ($i = 0; $row = $query->fetch(); $i++) { ?>
            <!-- Blog Post Row -->
            <div class="row">
              <div class="col-md-5">
                  <img class="img-responsive img-hover" src="<?=$row['image'] ?>" alt="">
              </div>
              <div class="col-md-6">
                <h3>
                  <p><?= $row['titre'] ?></p>
                </h3>
                
                <p><?= $row['date'] ?></p>

              </div>
            </div>
            <!-- /.row -->
            <hr>

          <?php } ?>
          <a class="btn btn-primary" href="news.php">Voir + <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-xs-12 col-md-4">
          <a href="boutique.php"><img class="img-responsive img-center" src="images/boutique.png" alt=""></a>
          <a href="https://www.facebook.com/esl.huellochatao"><img class="img-responsive img-center" src="images/facebook.jpg" alt=""></a>
          <a id="twitter" class="twitter-timeline" data-height="400" href="https://twitter.com/v_tanguy"></a>

          <script>
              !function(d,s,id){
                  var js,
                  fjs=d.getElementsByTagName(s)[0],
                  p=/^http:/.test(d.location)?'http':'https';
                  if(!d.getElementById(id)){
                      js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                      fjs.parentNode.insertBefore(js,fjs);
                  }
              }
              (document,"script","twitter-wjs");
          </script>
        </div>
      </div>
    </div>
</div>

  <hr>

  <!-- FOOTER -->
  <footer class="footer1">
    <div class="container-fluid">
      <div class="row">

        <!-- COLONNE 1 FOOTER -->
        <div class="col-lg-3 col-md-6 col-xs-12">
          <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_nav_menu">
              <h1 class="title-widget">Aller vers</h1>
              <ul>
                <li><a  href="/"><i class="fa fa-angle-double-right"></i> Accueil</a></li>
                <li><a  href="bureau.php"><i class="fa fa-angle-double-right"></i> Bureau</a></li>
                <li><a  href="photos.php"><i class="fa fa-angle-double-right"></i> Photos</a></li>
                <li><a  href="partenaire.php"><i class="fa fa-angle-double-right"></i> Nos partenaires</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- COLONNE 2 FOOTER -->
        <div class="col-lg-3 col-md-6 col-xs-12">
          <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_nav_menu">
              <h1 class="title-widget">Divers</h1>
              <ul>
                <li><a  href="news.php"><i class="fa fa-angle-double-right"></i>  Actualités</a></li>

                <li><a  href="boutique.php"><i class="fa fa-angle-double-right"></i>  Boutique</a></li>

              </ul>
            </li>
          </ul>
        </div>

        <!-- COLONNE 3 FOOTER -->
        <div class="col-lg-3 col-md-6 col-xs-12">
          <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_nav_menu">
              <h1 class="title-widget">Le site</h1>
              <ul>
                <li><a href="mentions_legales.php"><i class="fa fa-angle-double-right"></i> Mentions légales</a></li>
                <li><a href="charte.php"><i class="fa fa-angle-double-right"></i> Charte de confidentialité</a></li>
                <li><a href="terrain.php"><i class="fa fa-angle-double-right"></i> Terrains</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- COLONNE 4 FOOTER -->
        <div class="col-lg-3 col-md-6 col-xs-12">
          <ul class="list-unstyled clear-margins">
            <li class="widget-container widget_recent_news widget_nav_menu">
              <h1 class="title-widget">Nous contacter</h1>
              <div class="footerp">
                <ul>
                  <li><a href="contact.php"><i class="fa fa-angle-double-right"></i> Contact</a></li>
                </ul>
                <p><b>Email :</b> <a href="mailto:adressmail">esl@gmail.com</a></p>
                <p><b>Telephone :</b> 06 74 39 32 13  </p>
                <p><b>Adresse Postale :</b></br>45 rue Maurice Ravel 29200 BREST</p>
              </div>
              <div class="social-icons">
                <ul class="nomargin">
                  <a href="https://www.facebook.com/www.eslfoot.org/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                  <a href="mailto:esl@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- FOOTER COPYRIGHT DIGITAL DESIGN -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="copyright">
            © 2017, Digital Design, All rights reserved
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="design">
            <p>Web Design & Development by Digital Design <button id = "boutonAdmin" type="button" class="btn btn-default float-right"> Admin</button></p>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.cookie.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/admin.js"></script>
  <script src="js/controller.js"></script>

  <script type="text/javascript">
  if(typeof $.cookie('session') == 'undefined') $.cookie('session', false);
  </script>

  <!-- Script to Activate the Carousel -->
  <script>
  $('.carousel').carousel({
    interval: 5000 //changes the speed
  })

  </script>



</body>

</html>
