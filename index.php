<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="style.css" />
    <!--Let browser know website is optimized for mobile-->
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
            <li><a href="index.html" class="waves-effect waves-light btn btn-accueil">Accueil</a></li>
            <li><a href="nos_livres.html" class="waves-effect waves-light btn btn-accueil">Nos livres<i class="material-icons right">cloud</i></a></li>
            <li><a class="waves-effect waves-light btn btn-accueil">Actualités</a></li>
            <li><a class="waves-effect waves-light btn  btn-accueil">Se connecter</a></li>
            <li><a class="waves-effect waves-light btn  btn-accueil" id="create">Ajout livre</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="nos_livres.html">Nos livres</a></li>
            <li><a href="collapsible.html">Actualités</a></li>
            <li><a href="mobile.html">Se connecter</a></li>
            <li><a id="create">Ajout livre</a></li>
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

<script>

    $("#create").click(function() {
        $(".container2").html(
            '<h3>Ajout livre</h3>' +
            '<form id="my_form" action="create_book.php" method="post">' +
            '<div>' +
            '<label for="title">Titre</label>' +
            '<input type="text" name="title" value="">' +
            '</div>' +
            '<div>' +
            '<label for="description">Description</label>' +
            '<textarea name="description">' +
            '</textarea>'+
            '</div>' +
            '<div>' +
            '<label for="author">Auteur</label>' +
            '<input type="text" name="author" value=""/>' +
            '</div>' +
            '<div>'+
            '<label for="picture">Couverture</label>'+
            '<input type="file" name="picture" value=""/>'+
            '</div>'+
            '<div class="input-field">'+
            '<label for="genre">Genre</label>'+
            '<select name="genre">'+
            '<option value="action">Action</option>'+
            '<option value="science_fiction">Science-fiction</option>'+
            '<option value="romantique">Romantique</option>'+
            '<option value="guerre">Guerre</option>'+
            '<option value="aventure">Aventure</option>'+
            '<option value="fantastique">Fantastique</option>'+
            '<option value="bande_dessine">Bande dessinée</option>'+
            '</select>'+
            '</div>'+
            '<button id="btn" type="submit" name="submit">Ajouter</button>' +
            '</form>'
        );

        $('select').material_select();


//        function chargement(){
//            $.ajax({
//                url : 'reader_book.php',
//                type : 'get',
//                success: function(data){
//                    $(".second").html('<h3>Liste des randonnées</h3>' + data);
//                        }
//                    });
//                },
//                error: function() {
//                    $('.second').html('<h3>ERROR !!!!!!!!!!!!!!!!!!!!!</h3>');
//                }
//            });

        $('#my_form').on('submit', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var data = (formdata !== null) ? formdata : $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type: $form.attr('method'),
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                data: data,
                success: function (response) {
                    // La réponse du serveur
                    alert("Livre ajouté !");

                }
            });
        });
    });
// -----Update


//        $("#reader").click(function(){
//            chargement();
//        });
//    });
//
//
//    // -------------------------------------------------------------------------------------------------- //
//
//    $('.container2,.container').hide()
//    $('#create').on('click', function(){
//        $(this).toggleClass('active');
//        $('.container2').slideToggle(600);
//        $('.container').slideToggle(600);
//    });
//    $('.second').hide()
//    $("#reader").on('click', function(){
//        $(this).toggleClass('active');
//        $('.second').slideToggle(600);
//    });


</script>



</body>

</html>
