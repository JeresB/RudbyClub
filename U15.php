<?php
session_start();

require_once('header.html');
?>
<title>U19</title>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Etoile Saint-Laurent</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li >
                        <a href="about.html">Le club</a>
                    </li>
                   
                   <li>
                        <a id = "Sénior A" class = "lien-equipe" href="#">Sénior</a> <!-- j'ai laissé le lien à senior A mais faudra changer à sénior-->
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Foot jeunes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">U19</a> <!--blog-home-1.html-->
                            </li>
                            <li>
                                <a href="#">U17</a> <!--blog-home-2.html-->
                            </li>
                            <li class="active">
                                <a href="#">U15</a> <!--blog-post.html-->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ecole de foot <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">U19</a>
                            </li>
                            <li>
                                <a href="#">U17</a>
                            </li>
                            <li>
                                <a href="#">U15</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Divers <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Challenge Paul Vaillant</a></li> <!--full-width.html-->
                            <li><a href="#">Challenge Gouriou-Talec</a></li> <!--sidebar.html-->
                            <!--<li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="pricing.html">Pricing Table</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">U15
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li class="active">U15</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6 col-xs-12">
                    <img class = "img-responsive" src="images/u15.jpg" alt = "Equipe U15"></img>
                </div>
                <div class = "col-md-6 col-xs-12">
                    <blockquote>
                        <p class = "lead">
                            <i class="fa fa-calendar" aria-hidden="true"></i> RDV à : <span id ="rdv">14 h 30 Pierre CORLAY</span><?php echo '<button id = "bouton-rdv" class = "btn btn-default pull-right modif"><i class="fa fa-pencil" aria-hidden="true"></i></button>';?>
                        </p>
                        <p class = "lead">
                            <i class="fa fa-futbol-o" aria-hidden="true"></i> Match à : 15 h 30 au Pierre CORLAY
                        </p>
                        <div class = "row">
                            <div class = "col-md-12 col-xs-12">
                                <p class = "lead">
                                    <i class="fa fa-user" aria-hidden="true"></i> Responsables :
                                </p>
                            </div>
                            <div class = "col-md-12 col-xs-12">
                                <p class = "lead">
                                    O. BERTHOLOM : 06 89 83 41 81<br>N. MOAL : 06 67 52 31 26
                                </p>
                            </div>
                        </div>
                    </blockquote>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>BALCON C</td>
                                <td>BERTHOLOM K</td>
                                <td>BROUDIN M</td>
                                <td>DOSSER J</td>
                            </tr>
                            <tr>
                                <td>BAKAYOKO K</td>
                                <td>PENTKEU YANGA S</td>
                                <td>OCTAVE D</td>
                                <td>BENETEAU A</td>
                            </tr>
                            <tr>
                                <td>DIAKITE I</td>
                                <td>TRAORE I</td>
                                <td>LABARDE E</td>
                                <td>KONE I</td>
                            </tr>
                            <tr>
                                <td>TANDIA A</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        <hr>

        <!-- Footer -->
        <footer class="footer1">
        <div class="container-fluid">
            <div class="row"> 
                
                <!-- COLONNE 1 FOOTER -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <ul class="list-unstyled clear-margins">
                        <li class="widget-container widget_nav_menu">
                            <h1 class="title-widget">Aller vers</h1>
                            <ul>
                            	<li><a  href="index.html"><i class="fa fa-angle-double-right"></i> Accueil</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Photos</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Nos partenaires</a></li>
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
 								<li><a  href="#"><i class="fa fa-angle-double-right"></i>  Actualités</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Agenda</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Boutique</a></li>
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
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Mentions légales</a></li>
 			                    	<li><a href="#"><i class="fa fa-angle-double-right"></i> Charte de confidentialité</a></li>
			                    	<li><a href="stade.html"><i class="fa fa-angle-double-right"></i> Les stades</a></li>
                                </ul>
    					</li>
                    </ul>
                </div>
                
                <!-- COLONNE 4 FOOTER -->            
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <ul class="list-unstyled clear-margins">
                    	<li class="widget-container widget_recent_news">
                            <h1 class="title-widget">Nous contacter</h1>
                            <div class="footerp"> 
                                <p><b>Email :</b> <a href="mailto:adressmail">esl@gmail.com</a></p>
                                <p><b>Telephone :</b> 06 74 39 32 13  </p>
                                <p><b>Adresse Postale :</b></br>45 rue Maurice Ravel 29200 BREST</p>
                            </div>
                            <div class="social-icons">
                            	<ul class="nomargin">
                                    <a href="https://www.facebook.com/www.eslfoot.org/"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                    <a href="mailto:adressmail"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
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
    				    <p>Web Design & Development by Digital Design</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/updateHTML.js"></script>

</body>