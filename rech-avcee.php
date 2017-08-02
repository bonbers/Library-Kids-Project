<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8">
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="style.css"/>
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<img id="logo_r" src="./images/logo_jrn.gif" alt="logo">
<h3 id="titre">Library Kids</h3>
<div id="superposition"></div>
  <div id="fonts"></div>
  <nav>
     <div class="nav-wrapper">
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="menu right hide-on-med-and-down">
         <li><a href="index.php" class="waves-effect waves-light btn btn-accueil">Accueil</a></li>
         <li><a href="nos_livres.php" class="waves-effect waves-light btn btn-accueil">Nos livres<i class="material-icons right">cloud</i></a></li>
         <li><a href="actus.php" class="waves-effect waves-light btn btn-accueil">Actualités</a></li>
         <li><a href="identification.php" class="waves-effect waves-light btn  btn-accueil">Se connecter</a></li>
       </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="index.php">Accueil</a></li>
             <li><a href="nos_livres.php">Nos livres</a></li>
             <li><a href="actus.php">Actualités</a></li>
             <li><a href="identification.php">Se connecter</a></li>
         </ul>
     </div>
  </nav>

<main>
  <h2>Recherche avancée</h2>
  <div class="input-field col s12">
      <select>
        <option value="1">Romans</option>
        <option value="2">Bandes-dessinées</option>
        <option value="3">Autres</option>
      </select>
      <label>Genres</label>
    </div>

    <div class="input-field col s12">
      <select>
        <option value="1">0-3 ans</option>
        <option value="2">3-6 ans</option>
        <option value="3">6-10 ans</option>
        <option value="3">10-14 ans</option>
      </select>
      <label>Tranche d'âge</label>
    </div>
    <div class="input-field col s12">
      <select>
        <option value="1">Numériques</option>
        <option value="2">Audios</option>
        <option value="3">Classiques</option>
      </select>
      <label>Supports</label>
    </div>
<form>
  <input type="textarea" name="auteur">Auteur</input>
  <input type="textarea" name="édition">Edition</input>
  <input type="textarea" name="titre">Titre</input>
</form>
<button class="btn waves-effect waves-light" type="submit" name="action">Recherche
    <i class="material-icons right">send</i>
  </button>

<script>
$( document ).ready(function(){
   $(".button-collapse").sideNav();
   $('select').material_select();
});
</script>
</main>

  <footer class="page-footer">
      <div class="container">
          <div class="row">
              <div class="col l6 s12">
                  <h5 class="white-text"></h5>
                  <a class="grey-text text-lighten-4" href="contact.php">Contact </a>
              </div>
              <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Nous suivre.... </h5>
                  <ul>
                      <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                      <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  </ul>
              </div>
          </div>
      </div>
      <div class="footer-copyright">
          <div class="container">
              © 2017 Copyright
              <a class="grey-text text-lighten-4 right" href="#!"></a>
          </div>
      </div>
  </footer>
</body>
</html>