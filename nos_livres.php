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
     <script type="text/javascript" src="js/materialize.min.js"></script>
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
         <li><a class="waves-effect waves-light btn btn-accueil">Actualités</a></li>
         <li><a class="waves-effect waves-light btn  btn-accueil">Se connecter</a></li>
       </ul>
       <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="nos_livres.php">Nos livres</a></li>
        <li><a href="actus.php">Actualités</a></li>
        <li><a href="identification.php">Se connecter</a></li>
      </ul>
     </div>
   </nav>
  <div class="carousel">
<!--
      <a class="carousel-item" href="#one!"><img src="https://www.livralire.org/wp-content/uploads/2017/05/reine-coquillage.jpg"</a>
      <a class="carousel-item" href="#two!"><img src="https://www.livralire.org/wp-content/uploads/2017/05/penelope.jpg"></a>
      <a class="carousel-item" href="#three!"><img src="https://www.livralire.org/wp-content/uploads/2017/05/soupeatout.jpg"></a>
      <a class="carousel-item" href="#four!"><img src="https://www.livralire.org/wp-content/uploads/2017/05/picpiquenique.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="https://www.livralire.org/wp-content/uploads/2017/04/glory.jpg"></a>
      <a class="carousel-item" href="#five!"><img src="https://www.livralire.org/wp-content/uploads/2017/03/parkingnuit.jpg"></a>
      <a class="carousel-item" href="#five!"><img src=""></a>
      -->
  </div>
<button id="test">TEST AJAX</button>
<ul id="zone"></ul>

 <script>
     //dddddddd
   $(document).ready(function(){
    $(".button-collapse").sideNav();
    $('.carousel').carousel();
       });

   $.ajax({
      url : 'https:raw.githubusercontent.com/Coda-Wikicoda/Json-bibliotheque/master/list.json',
      type : 'get',
      dataType : 'json',
     success: function (data) {
    //  data=JSON.parse(data);
     //$.each(data.books,function(index, d){
         //creation d'une condition pour ne voir qu'un certain nombre de couvertures
         for (var i=0; i<8; i++) {
             $('.carousel').append('<a class="carousel-item" href=""><img src="' + data.books[i].cover + ' "></b></br><b><span id="titrelivre"> ' + data.books[i].title + '<b></span>');
         }
         },
     error : function() {
         $('#zone').html('FATAL ERROR');
     }
     });

 </script>

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