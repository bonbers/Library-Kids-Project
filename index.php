<?php include('header.php');
?>
    <div class="moving-zone">
        <div class="popup">
            <div class="popup-content">
                <div class="popup-text">
                    <a href="nos_livres.php"><b>Accédez à nos livres !!!<b></a>
                </div>
            </div>
        </div>
    </div>
    <div class='wrap'>
        <div class='content'>
            <h2>Bonjour</h2>
            <p>Explications ici</p>
        </div>
    </div>
    <h1>Comment s'enregistrer</h1>
    <a class="croix btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>


    <script>


    var moveForce = 30; // max popup movement in pixels
    var rotateForce = 20; // max popup rotation in deg

    $(document).mousemove(function(e) {
        var docX = $(document).width();
        var docY = $(document).height();

        var moveX = (e.pageX - docX/2) / (docX/2) * -moveForce;
        var moveY = (e.pageY - docY/2) / (docY/2) * -moveForce;

        var rotateY = (e.pageX / docX * rotateForce*2) - rotateForce;
        var rotateX = -((e.pageY / docY * rotateForce*2) - rotateForce);

        $('.popup')
            .css('left', moveX+'px')
            .css('top', moveY+'px')
            .css('transform', 'rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)');
    });
</script>

    <script>
        $('.croix').on('click', function(){
            $('.wrap, .croix').toggleClass('active');
            return false;
        });
    </script>

<nav>
    <div class="nav-wrapper">
        <a href="#" data-activates="mobile-demo" class="btn btn-floating pulse button-collapse"><i class="btn-menu material-icons">menu</i></a>
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

<!--mise en place de la barre de recherche -->
<div class="nav-wrapper">
    <form>
        <div class="input-field">
            <input id="search" placeholder="recherche" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <a href="rech-avcee.php"> <input type="button" onclick="" value="GO" /></a>
        </div>
    </form>
</div>


<!--mise en place de la newsletter -->
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">S'abonner à la Newsletter</span>
                <input id="email" type="email" class="validate">
                <input type="button" onclick="" value="OK"/>
                <label for="email" data-error="badformat" data-success="okmail">Email</label>
            </div>
        </div>
    </div>
</div>


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
</script>
<?php include('footer.php');
?>
</body>
</html>
