<?php include('header.php');
?>

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