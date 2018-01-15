<?php
session_start();
header('Cache-Control: no-cache');
header('Pragma: nocache');

if (isset($_SESSION['admin'])) {
    header('Location: /');
    exit();
}

require_once('templates/head.html');
require_once('php/constantes.php');

try {
    $pdo = new PDO("mysql:host=".DB_SERVER.";port=3306;dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASSWORD);
} catch (PDOException $e) {
    error_log('Connexion échouée : '.$e->getMessage());
}
?>
<title>Connexion ADMIN</title>
<link href="css/login.css" rel="stylesheet">
        <body id = "login_body">
            <div id = "panel_connexion" class = "container">
                <div class = "row">
                    <div class = "col-md-6 col-md-offset-3">
                        <div class = "panel panel-info">
                            <div class = "panel-heading">
                                <h3>Connexion Administrateur</h3>
                            </div>
                            <div class = "panel-body">
                                <div id = "alert"></div>
                                <form class="form-horizontal" method="post" action="login.php">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <input name="login" id="login" type="text" class="form-control" placeholder="Login" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                                        <input name="pass" id="pass" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <br>
                                    <button id="connexion" type="submit" class="btn btn-success pull-right" value = "Connexion">Connexion</button>
                                    <a href="/" id = "annuler" class="btn btn-danger pull-right annuler">Annuler</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <script src="js/jquery.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/admin.js"></script></body>


<?php
if (isset($_POST['login']) && isset($_POST['pass'])) {
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['pass']);

    $query = $pdo->prepare("SELECT * FROM admin WHERE login = :login AND password = PASSWORD(:password)");
    $query->bindParam(":login", $login);
    $query->bindParam(":password", $password);
    $query->execute();
    $row = $query->fetch();

    if ($row != false) {
        $_SESSION['admin'] = true;
        echo '<script src="js/cookie.js"></script>';
    } else {
        echo '<script src="js/alert.js"></script>';
    }
}
?>
