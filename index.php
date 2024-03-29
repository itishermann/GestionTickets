<?php
    session_start();
    if(isset($_SESSION["role"]) && $_SESSION["role"]=="admin"){
        header("location:admin/");
    }
    if(isset($_SESSION["role"]) && $_SESSION["role"]=="client"){
        header("location:public/");
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gestion de tickets</title>
</head>

<body>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
    <div class="container">
        <div class="loginCard">
            <img src="assets/img/logo.png" class="logo3iL"></img>
            <div class="semiBold">
                <p>
                    Bienvenue au centre de gestion de plaintes du foyer.<br /> Nous sommes là pour vous aider, connectez-vous et dites nous tout
                </p>
            </div>
            <form class="form" onsubmit="login()">
                <div class="form-group">
                    <input class="form-control" value="" id="emailBox" type="email" placeholder="Adresse email" required autocomplete="username">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" type="password" value="" id="passwordBox" placeholder="Mot de passe" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text" onClick="showPassword()" id="eyeIcon" title="Afficher le mot de passe"><i class="fa fa-eye pointerOnHover"></i></div>
                        </div>
                    </div>
                </div>
                <div id="errorField" class="text-danger"></div>
                <button type="submit" class="btn btn-link positive" id="submitButton" href="" onclick="login()"><span id="connexion">Connexion</span></button>
            </form>
        </div>
    </div>
    <footer>
        © 3iL-Groupe 2020
    </footer>
    <script src="js/bootstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>