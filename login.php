<?php include('header.php');
?>

<div class="connect">
    <h2 id="log">Connexion</h2>
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email" data-error="Entrez une adresse valide" data-success="Adresse valide">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                </div>
            </div>
        </form>
    </div>
</div>

    <div class="section"></div>
    <div class="section"></div>

<?php include ('footer.php');
?>