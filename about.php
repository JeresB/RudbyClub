<?php
session_start();

$page = "Le club";
$lien = "../about.php";
$breadcrumb = "Histoire";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('templates/head.html'); ?>
    <title><?php echo $page; ?></title>
</head>

<body>
    <?php require_once('templates/navbar.html'); ?>

    <!-- Page Content -->
    <div class="container">
    <?php require_once('templates/breadcrumb.php'); ?>

        
    <?php require_once('templates/alertAdmin.php'); ?>

    <!-- Intro Content -->
    <div class="panel panel-default">
        <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/histoire.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>1909-1919</h2>
                <p>Créé à la fin du XIXème siècle, le patronage de Lambézellec regroupe 4 activités :
                    Cercle d’étude,  théâtre, musique mais aussi football qui se joue sur le plan local. </p>
                <p>En 1919 la société sportive Étoile St Laurent voit le jour et s’affilie 
                    à la fédération gymnique et sportive des patronages de France(FGSPF). Gabriel L’HOSTIS, agent technique à l’arsenal, 
                    surnommé « Tonton BIHEL », accepte la présidence, qu’il assurera avec un dévouement exemplaire jusqu’en 1939.</p>
            </div>
        </div>
        </div>
    </div>
        
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <h2>1919-1939</h2>
                <p>1921 : Affiliation de la section à la Fédération Française de Football, les matchs à domicile se déroulent sur un terrain de Loscoat.
                   <br><br>1927 : Arrivée de l’abbé CROISSANT qui sera directeur du patronage jusqu’en 1944. En septembre de la même année, crise au sein du club, 
                   démissions massives de footballeurs, forfait général pour la saison 1927-1928.
                <br><br>1928 : acquisition et aménagement du terrain au lieu dit « Pen Ar Pavé »
                <br><br>Saison 1928-1929 reprise, grâce au retour de plusieurs joueurs, en 3è division. 
                Champion de leur groupe, monté en 2è division en saison 1929-1930 et en 1er division en saison 1930-1931. 
                Le club se maintient en 1er division jusqu’à 1939 au début de la guerre.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/1921.png" alt="">
            </div>
        </div>
      </div>
    </div>
        
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/1949.png" alt="">
            </div>    
            <div class="col-md-6">
                <h2>1939-1948</h2>
                <p>1939 : Pierre CORLAY prend la présidence jusqu’à 1963, avec une interruption pour la saison 1948-1949. De 1939 à 1945, 
                le nombre d’équipe est réduit à 4 et il n’y a pas de championnat de jeunes. Un championnat local est créé, auquel prend part, 
                en autres, l’ASB, le PL Lambézellec, le stade Lesnevien, l’Etoile Rouge (actuellement PL GUERIN) et l’Etoile St LAURENT. 
                Les matchs se déroulent dans les environs de Brest (déplacement en petit train pour Lesneven et en vélo pour Kerhuon, Guipavas, St Renan, 
                L’Abers Ildut etc.).
                <br><br>1945-1946 : Reprise en 1er division, battu à Morlaix par Rostrenen 3-1 pour la montée en promotion inter groupe
                <br><br>1946-1947 : Champion de 1er division (avec une dizaine de points d’avance)
                <br><br>1947-1948 : Montée en promotion d’honneur.
                <br><br>1948 : Arrivée de l’abbé GUEGUEN qui restera à l’Etoile St LAURENT jusqu’en 1963. Cette saison 1948-1949 voit un 
                changement de président  en la personne d’Augustin PRONOST, ne restant à ce poste qu’une saison.
                <br><br>De 1948 à 1961 en Promotion d’Honneur</p>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <h2>1948-1967</h2>
                <p>1951-1952 : après avoir été en tête, nous terminons 3e et nous disputons une poule des 3e en vue de la montée en DRH, 
                battus 3-0 par Lannion, nous gagnons sur tapis vert, mais battus 2-1 par L’Alréenne puis 4-2 par Le Mans.
                <br><br>1961 : Descente en 1er division pour la saison 1961-1962
                <br><br>1962 : Remontée en promotion, après barrage contre AS St Martin, jusqu’en 1968.
                <br><br>1964 : Gaby VAILLANT prend la présidence jusqu’en 1971 .
                <br><br>Vers 1964 le curé de Lambézellec M. SERGENT menace de vendre « Pen Ar Pavé » pour faire un lotissement de castors. 
                Les dirigeants de l’époque durent se battre pour conserver le terrain. 
                <br><br>1965 : Modification du sens du terrain de « Pen Ar Pavé ». Les matchs se déroulent au terrain du Spernot pour les saisons 1965-66 et 1966-67.
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/1963.png" alt="">
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/1970.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>1967-1974</h2>
                <p>1967-1968 : Terminant 3e ex aequo avec le stade Relecquois, nous montons en DRH. (après tirage au sort)
                <br><br>De 1968 à 1975 en DRH
                <br><br>1971 : Paul LE DINS prend la présidence jusqu’à 1974.
                <br><br>1973-1974 : Terminant 3e en match de barrage  accession en DSR, cette saison également, l’Etoile St LAURENT prend part à la compétition propre de la Coupe de France et est battu en 32e de finale par le Stade Brestois 1-0. 
                Puis est éliminé en ¼ de finale de la coupe de l’Ouest par Penmarch.
                Au cours de cette saison , construction des nouveaux vestiaires et des tribunes.
                <br><br>1974 : Jean VOURCH prend la présidence jusqu’en 1978.
                </p>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <h2>1974-1990</h2>
                <p>De 1974 à 1978 en DSR
                <br><br>1977-1978 : En fin de saison matchs de barrage des 3e l’Etoile St LAURENT gagne à Mamers  et est battue 
                par Plouhinec (match joué à Bohars, le terrain étant en réfection)
                <br><br>1978 : Montée en DH  pour la première fois de son histoire.
                Alain LAOT prend la présidence jusqu’en 1981.
                <br><br>1981 : Jean LE COZ assure la présidence jusqu’en 1984.
                <br><br>1983 : En DSR.
                <br><br>1984 : André HABASQUE prend la présidence jusqu’en 1988.
                <br><br>1987-1988 : mise en place de l’éclairage sur le terrain de « Pen Ar Pavé ».
                <br><br>1988 : Raymond LE BORGNE assure la présidence pour la saison 1988-1989.
                <br><br>1989 : Yves SALIOU prend la présidence jusqu’en 1993.
                <br><br>1990 : Descente en PH
                <br><br>Le 04 Novembre 1990 à 11h00, le stade prend le nom de Pierre CORLAY.
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/1990.png" alt="">
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/1995.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>1991-1998</h2>
                <p>
                    1991 : Les Minimes sont champions de ligue et montent en championnat National.
                    <br><br>1993 : 3 présidents, Michel HUGUET, Yves SALIOU, René QUINQUIS.
                    <br><br>1994-1995 : 2 présidents René QUINQUIS, Michel HUGUET. 
                    <br><br>Fin de saison :  1er de DHR avec GOUESNOU.
                    <br><br>1995-1996 : 3 présidents, Michel HUGUET, Yves SALIOU, Charles BIZIEN. 
                        Destruction partielle du toit de la tribune lors d’une violente tempête.
                    <br><br>1996-1997 : en P.H, Charles BIZIEN président.

                    <br><br>1997-1998 : Eliminé par GOUESNOU  en Coupe de France au 22e tir au but et en coupe de Bretagne par PLABENNEC (CFA1) 
                    mais accède en DRH. 
                    L’équipe B remporte la coupe de District face à ST POL DE LEON
                </p>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <h2>1998-2004</h2>
                <p>
                1998-1999 : Président Charles BIZIEN.
                Week-end noir du 10 et 11 octobre 1998, les moins de 15 éliminés en Coupe de Bretagne, les moins de 17 éliminés 
                en Coupe GAMBARDELLA, les séniors B éliminés en Coupe de District et les séniors A éliminés en Coupe de France. 
                Les séniors A accèdent en DSR et les Benjamins se qualifient pour la finale Régionale de la Coupe nationale et échouent en ¼ de finale.

                <br><br>1999-2000 : Jean-Yves CHAPALAIN prend la présidence jusqu’en 2003.
                L’équipe B remporte pour la 2e fois la Coupe de District face à St RENAN.
                Le 30 avril, les benjamins, encadrés par Gilbert KERHUEL, sont éliminés en ½ finale du Challenge de Printemps à GUIPAVAS.
                
                <br><br>2001-2002 : maintien en DSR des Seniors A ; les 13 ans accèdent à la promotion de ligue et remportent la Coupe du District aux dépends de St RENAN et le Challenge de l’offensive du Crédit Agricole.

                <br><br>2002-2003 : Maintien en DSR.

                <br><br>2003-2004 : 3 présidents, Michel BIHANNIC, J-Jacques GALERON, Patrick JAOUEN jusqu’en 2006.
                L’équipe première flirte avec la relégation mais réussit à se maintenir en DSR (9e /12).


                </p>
            </div>
             <div class="col-md-6">
                <img class="img-responsive" src="images/2000.png" alt="">
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/2006.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>2004-2009</h2>
                <p>
                    2004-2005 : l’équipe B remporte pour la 3e fois la Coupe de District en s’imposant à SANTEC. 
                    <br>Création d’une nouvelle division entre DSR et DH en championnat de ligue de Bretagne. Nous nous maintenons en DSR.
                    <br><br>2005-2006 : Mauvaise saison pour les équipes Séniors. La A descend en DRH et la B en 2eme division de District. 
                    Par contre l’équipe Loisirs remporte la Coupe de District LOISIRS

                    <br><br>2006-2007 : J-Jacques GALERON et Patrick JAOUEN sont réélus à la Présidence jusqu’en 2010-2011 
                    alors que Michel BIHANNIC décide de se retirer. 
                    Les Séniors A terminent 12/12 du championnat de DRH et sont rétrogradés en PH.
                    
                    <br><br>2007-2008 : L’équipe des Séniors A descend en D1 de District alors que la B se maintient en D2. 
                    L’équipe Vétérans remporte la coupe « GUENEGUES ». 

                    <br><br>2008-2009 : L’équipe A en D1 de District avec Thomas LECOINTRE, entraineur-joueur ;
                    la B descend en D3.
                </p>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <h2>2010-2013</h2>
                <p>
                    2010-2011 : J-Jacques GALERON et Patrick JAOUEN sont réélus à la présidence. L’équipe Seniors A remporte la Coupe de DISTRICT 2011 face à GOUESNOU B.
                    
                    <br><br>2011-2012 : Les Séniors A évoluant toujours en D1 de DISTRICT ; l’équipe B remonte en D2 en fin de saison.

                    <br><br>Notre section fêta ses 90 ans d’affiliation à Fédération Française de Football le 29 Mai 2012 au stade Pierre CORLAY.

                    <br><br>2012-2013 : maintien des seniors A en D1 et des B en D2
                    <br>Création du GJLB (Groupement de Jeunes de Lambézellec Brest) en partenariat avec le PLL pour les catégories U15, U17 et U19.
                    
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/2011.png" alt="">
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="images/2013.png" alt="">
            </div>
            <div class="col-md-6">
                <h2>2013-2015</h2>
                <p>
                    2013-2014 : Les Séniors A accèdent en PH au terme de la dernière journée de championnat de D1 : ils terminent 2ème in-extrémis après un match nul, zéro partout, à Sizun. 
                    Une belle récompense pour le travail effectué autour de son entraineur-joueur Thomas LECOINTRE.
                    
                    <br><br>En début de saison, ils s’étaient illustrés en Coupe de France, atteignant le 6ème tour, joué à domicile le samedi 25 octobre, face à l'US Montagnarde (Division d’honneur, soit 5 divisions d’écart). 
                    L'ESL s'incline sur le score de 6 à 0 devant 800 spectateurs. Pour en arriver là, les Noir et Blanc avaient notamment éliminé deux clubs de PH (Plougonvelin et Beneton) e une DRH (Plougastel-Daoulas).
                    <br>Ces performances avaient fait la une des journaux locaux et de Tébéo (chaîne de télévision locale).
                    
                    <br><br>En coupe de Bretagne, l’ESL avait éliminé Plougastel (encore !) avant de s’incliner deux à zéro contre Plouvorn (DH) en 1/32ème de finale.
                    <br>En coupes du Conseil et du District : éliminations en 1/8 ème  de finale à Lanmeur et contre Plouvien.
                    
                    <br><br>2014-2015 : Les Séniors A accèdent en DRH, grâce à leur 2ème place acquise de haute lutte derrière les Gars du Reun (B). 
                    L'équipe B redescend en D3, empêchant la montée de l’équipe C, nouvellement créée, qui termine 1ère en D4.
                    <br>Le 31 mai, les seniors A remportent la Coupe du Conseil Général face aux Gars du Reun(B), sur le score 1 à 0, après prolongation. 
                    Pour se qualifier, ils avaient  éliminé deux équipes de DRH (Plougonven et Landivisiau) et une DSR (l’AS Brestoise en ½ finale 2 à 0).
                    
                </p>
            </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">    
        <div class="row">
            <div class="col-md-6">
                <h2>2015-2017</h2>
                <p>
                    
                    2015-2016 : Les Seniors A se maintiennent in-extrémis en DRH . 
                    <br>L’équipe B remonte en Division 2, permettant l’accession de l’équipe C en Division 3, à la faveur d’un repéchage en septembre 2016 .
                    
                    <br><br>2016-2017 : dernière saison avant la refonte des championnats de Ligue ; toujours entraînés par Thomas LECOINTRE, les Seniors A se maintiennent en milieu de tableau et joueront en Régionale 3.
                    <br>En coupe de France, ils atteignent le 4ème tour, où ils sont éliminés par PLABENNEC (CFA).

                    <br><br>Les Seniors B, nouveaux promus, sont coachés par Mick Le Moigne ; ils disputent le podium en Division 2 et jouent la montée en D1.
                    <br>Les Seniors C, repêchés en septembre 2016, effectuent un beau parcours en D3 et terminent 3èmes.

                    <br><br>Et une bonne nouvelle attendue de longue date : la mairie de Brest annonce la transformation du terrain stabilisé de Lanroze en synthétique ; les travaux se déroulent de mai à octobre 2017.
                    
                </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/2017.png" alt="">
            </div>
        </div>
      </div>
    </div>
    </div>
    <!-- /.container -->

    <hr>
    

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>

    <?php require_once('templates/footer-js.html'); ?>   

</body>

</html>
