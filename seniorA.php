<?php
require_once('header.html');
?>
<title>Senior A</title>
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Foot jeunes <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">U19</a> <!--blog-home-1.html-->
                            </li>
                            <li>
                                <a href="#">U17</a> <!--blog-home-2.html-->
                            </li>
                            <li>
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
                <h1 class="page-header">Sénior A
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Accueil</a>
                    </li>
                    <li class="active">Sénior A</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6 col-xs-12">
                    <img class = "img-responsive" src="images/seniora.jpg" alt = "Equipe sénior A"></img>
                </div>
                <div class = "col-md-6 col-xs-12">
                    <blockquote>
                        <p class = "lead">
                            <i class="fa fa-calendar" aria-hidden="true"></i> RDV à : <span id ="rdv">14 h 00 Pierre CORLAY</span><?php echo '<button id = "bouton-rdv" class = "btn btn-default pull-right modif"><i class="fa fa-pencil" aria-hidden="true"></i></button>';?>
                        </p>
                        <p class = "lead">
                            <i class="fa fa-futbol-o" aria-hidden="true"></i> Match à : 15 h 30 au centre de Bohars
                        </p>
                        <div class = "row">
                            <div class = "col-md-12 col-xs-12">
                                <p class = "lead">
                                    <i class="fa fa-user" aria-hidden="true"></i> Responsables :
                                </p>
                            </div>
                            <div class = "col-md-12 col-xs-12">
                                <p class = "lead">
                                    T. LECOINTRE : 06 99 36 15 96<br>A. COADOU : 06 60 65 07 29
                                </p>
                            </div>
                        </div>
                    </blockquote>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td>PENDEZEC A  </td>
                                <td>PRIGENT PY</td>
                                <td>LANDRE J</td>
                                <td>BILAL</td>
                            </tr>
                            <tr>
                                <td>CARIOU B</td>
                                <td>LAOT M</td>
                                <td></td>
                                <td>LE ROY M</td>
                            </tr>
                            <tr>
                                <td>TANGUY V</td>
                                <td>VOURCH Q</td>
                                <td>ROUX F</td>
                                <td>FAROUK</td>
                            </tr>
                            <tr>
                                <td>CARADEC C</td>
                                <td>VOURCH T</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
            
        </div>

        <hr>

<?php
require_once('footer.html');
?>