<?php
session_start();

$page = "Charte de confidentialité";
$lien = "../charte.php";
$breadcrumb = "Charte de confidentialité";
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
                    <p class = "text-justify">Ce site utilise les services d'analyse web Google Analytics de la société Google In. ("Google").
                    Google Analytics utilise des "Cookies", des données texte, qui sont enregistrées sur votre ordinateur
                    (par votre navigateur Internet) et qui permettent d'analyser votre utilisation du site lors de votre visite.
                    Les données récoltées via les Cookies concernant votre utilisation du site sont transférées sur un serveur de
                    Google aux USA et enregistrées sur place. Dans le cas d'une activation de l'anonymisation de l'IP sur ce site,
                    votre adresse IP sera toutefois compressée au préalable par Google, dans les Etats membres de l'Union Européenne
                    ou dans les autres Etats membres du traité de l'espace économique européen. Seulement dans des cas exceptionnels,
                    l'adresse IP complète sera transmise à un serveur de Google aux Etats-Unis et alors compressée. Google utilisera
                    ces informations pour le compte du propriétaire de ce site, afin d'analyser votre utilisation du site, d'établir
                    des rapports sur l'activité des visiteurs et fournir aussi des données aux services tiers liés à l'utilisation du
                    site et d'Internet. Google ne reliera pas l'adresse IP transmise par votre navigateur dans le cadre de Google
                    Analytics à d'autres données Google. Vous pouvez désactiver l'installation et l'utilisation des Cookies par un
                    simple paramétrage de votre logiciel de navigation Internet; nous vous informons cependant qu'il est alors possible
                    que vous ne puissiez accéder à toutes les fonctions du site de façon optimale. Mais vous pouvez empêcher l'enregistrement
                    des données personnelles (incluant votre adresse IP) engendré par les Cookie et l'utilisation du site, ainsi que 
                    l'exploitation de ces données par Google, en téléchargeant et installant grâce au lien suivant le Plugin navigateur
                    disponible : <a href = "http://tools.google.com/dlpage/gaoptout">http://tools.google.com/dlpage/gaoptout</a></p>

                    <p class = "text-justify">Vous pouvez empêcher l'enregistrement des données par Google Analytics en cliquant sur ce lien. Un "cookie d'opt-out"
                    sera alors placé sur votre site web et vous permettra de ne pas être tracké durant votre navigation sur ce site.</p>

                    <p class = "text-justify">Vous trouverez plus d'informations concernant les Règles de confidentialité et conditions d'utilisation de Google Analytics
                    ici ou dans la rubrique A propos de Google Analytics. Veuillez noter que sur ce site, le code Google Analytics
                    "gat._anonymizeIp();" a été ajouté afin d'assurer la collecte des adresses IP de façon anonyme (IP masking).</p>

                    <p class = "text-justify">Nous utilisons le service reCAPTCHA de Google Inc. (Google) pour protéger les entrées des formulaires sur votre site.
                    Ce service est utilisé pour différencier les entrées faites par un être humain des abus automatisés. Cela implique l'envoi
                    de l'adresse IP et éventuellement d'autres données requises par Google pour le service reCAPTCHA. À cette fin, vos données
                    seront communiquées à Google et utilisées par leurs services. Toutefois, votre adresse IP sera préalablement raccourcie par
                    Google dans les États membres de l'Union européenne - ou dans d'autres États qui font partie de l'accord sur l'Espace économique
                    européen - et sera ainsi anonyme. Dans certains cas exceptionnels, votre adresse IP complète sera transmise à un serveur de
                    Google aux États-Unis et raccourcie ensuite. Au nom de l'exploitant de ce site web, Google utilisera ces informations pour
                    évaluer votre utilisation de ce service. L'adresse IP fournie par reCAPTCHA par votre navigateur ne sera pas fusionnée avec
                    d'autres données de Google. Cette collection des données est sujette à la Charte de confidentialité de Google. Pour plus
                    d'informations concernant la politique de confidentialité de Google, rendez-vous sur la page : https://www.google.com/intl/fr/policies/privacy/

                    En utilisant le service reCAPTCHA, vous consentez au traitement des données vous concernant par Google, de la manière et aux
                    fins énoncées ci-dessus.</p>
                </div>
            </div>
        </div>
            

        <hr>

    <?php require_once('templates/footer.html'); ?>
    <?php require_once('templates/footer-copyright.html'); ?>
       
    <?php require_once('templates/footer-js.html'); ?> 

</body>

</html>
