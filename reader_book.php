<?php
/**
 * Created by PhpStorm.
 * User: romain
 * Date: 10/07/17
 * Time: 11:32
 */

include ('connect.php');
$req = $bdd->query('SELECT * FROM Livres');
while ($data = $req->fetch()){
    ?>
    <p><b>Titre :</b> <?php echo ($data->title); ?></p>
    <p><b>Description :</b> <?php echo ($data->description); ?></p>
    <p><b>Auteur :</b> <?php echo ($data->author); ?></p>
    <?php
}
?>
