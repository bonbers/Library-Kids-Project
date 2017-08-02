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
  <body>
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
        <h2>Contact</h2>
          <button class="btn waves-effect waves-light" type="submit" name="action">Retour
          <i class="material-icons right"></i>
        </button>
      <p>Médiathèque Library KIds<br/>17 Avenue Charles Pouzot<br/>
        30 000 Alès<br/><br/>Tel.: 06.06.78.90.89<br/>contact@librarykids.com<br/>
      Plan d'accès</p>

      <!-- Carte simple pour mettre le plan d'accès et un lien  -->

      <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="./images/plan-acces.png">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>Plan d'accès</p>
            </div>
            <div class="card-action">
              <a href="#">Lien</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Nom*</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Prénom*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Adresse e-mail*</label>
        </div>
      </div>
      <div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">mode_edit</i>
        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
        <label for="icon_prefix2">Votre message</label>
      </div>
    </div>
  </form>
  </div>
    </form>
    <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
        <i class="material-icons right"></i>
    </button>
  </div>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"></h5>
                    <p class="grey-text text-lighten-4">F.A.Q. / Contact </p>
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
            </div>
        </div>
    </footer>
  </body>
  </html>
