<?php include("header.php");
?>

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
</main>

<?php include('footer.php');
?>
