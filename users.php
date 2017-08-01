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

<button id="affliste">Liste des users</button>
<ul id="zone"><span>USERS</span></ul>

<script>
    $(document).ready(function(){
        $('#affliste').one('click', function () {
            $.ajax({
                url: 'list.json',
                type: 'get',
                dataType: 'json',
                success: function (data) {
                    $.each(data.users, function (index, d) {
                        $('#zone').append('<li><p><b>Nom</b> :' + d.firstname + '</p></li>');
                        $('#zone').append('<li><p><b>Prénom</b> :' + d.lastname + '</p></li>');
                    });
                },
                error: function () {
                    $('#zone').html('FATAL ERROR');
                }
            });
        });
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
            © 2017 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
</body>
</html>