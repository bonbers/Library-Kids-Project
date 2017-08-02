<?php include("header.php");
?>
  <div class="carousel">
  </div>

  <button id="test">TEST AJAX</button>
<ul id="zone"></ul>

 <script>
     $(document).ready(function(){
         $('.carousel').carousel();
     });
     $(document).ready(function(){
    $(".button-collapse").sideNav();
   });

   $.ajax({
      url : 'list.json',
       </script>

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
         <li><a href="actus.php"><a class="waves-effect waves-light btn btn-accueil">Actualités</a></li>
         <li><a href="identification.php"><a class="waves-effect waves-light btn  btn-accueil">Se connecter</a></li>
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
  </div>

 <script>
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
//     $.each( data.books,function(index, d){
     for(var i=0; i<8; i++){
         $('.carousel').append('<a class="carousel-item" href=""><div class="title"><img class="toto" src="' + data.books[i].cover + ' "></br><p>' +
             data.books[i].title + '<p></div>' );
     }
//     $('.carousel').append('<a class="carousel-item" href=""><div class="title"><img class="toto" src="' + d.cover + ' "></br><p>' +  d.title + '<p></div>' );
//       });
     },
     error : function() {
       $('#zone').html('FATAL ERROR');
     }
   });
 </script>

<?php include('footer.php');
?>
<script>
     //$.each(data.books,function(index, d){
//creation d'une condition pour ne voir qu'un certain nombre de couvertures
         for (var i=0; i<8; i++) {
             $('.carousel').append('<a class="carousel-item" href=""><img src="' + data.books[i].cover + ' "></b></br><b><span id="titrelivre"> ' + data.books[i].title + '<b></span>');
         }
         },
     error : function() {
         $('#zone').html('FATAL ERROR');
     });
 </script>
</body>
</html>

