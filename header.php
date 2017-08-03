<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<header>
    <img id="logo_r" src="./images/logo_jrn.gif" alt="logo">
    <h3 id="titre">Library Kids</h3>
    <div id="superposition">
    </div>
    <div id="fonts">
    </div>
</header>

<nav>
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="btn btn-floating pulse button-collapse"><i class="btn-menu material-icons">menu</i></a>
        <ul class="menu right hide-on-med-and-down">
            <li><a href="index.php" class="waves-effect waves-light btn btn-accueil">Accueil</a></li>
            <li><a href="nos_livres.php" class="waves-effect waves-light btn btn-accueil">Nos livres<i class="material-icons right">cloud</i></a></li>
            <li><a class="waves-effect waves-light btn btn-accueil">Actualités</a></li>
            <li><a href="login.php" class="waves-effect waves-light btn  btn-accueil">Se connecter</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="nos_livres.php">Nos livres</a></li>
            <li><a href="collapsible.html">Actualités</a></li>
            <li><a href="login.php">Se connecter</a></li>
        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $(".button-collapse").sideNav();
        $('select').material_select();
    });
</script>

<div class="main">
    <div class="container2"></div>
    <div class="container"></div>
</div>
<div class="second"></div>

<section class="stage">
    <figure class="ball"><span class="shadow"></span></figure>
</section>