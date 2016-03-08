<?php
  include ('includes/header.php');
  include ('includes/fonctions.php');
  include ('includes/messages.php');
?>

<div class="row">
  <form class="form-horizontal col-lg-6" method="POST" action="administration.php">

  <div class="form-group">
    <legend>Nouvel-lle employé-e</legend>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Nom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="nom" name=" nom">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Prénom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="prenom" name="prenom">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Titre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="titre" name="titre">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Civilité</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="civilite" name="civilite">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date de naissance</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="naissance" name="naissance">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date embauche</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="embauche" name="embauche">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Adresse</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="adresse" name="adresse">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Ville</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="ville" name="ville">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Region</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="region" name="region">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Code postal</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="codepost" name="codepost">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Pays</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="pays" name="pays">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Téléphone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="telephone" name="telephone">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Extension</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="extension" name="extension">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Notes</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="notes" name="notes">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Responsable</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="boss" name="boss">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Salaire</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="salaire" name="salaire">
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary btn-sm">Créer nouveau</button>

  </form>
</div>

<?php
  include ('includes/footer.php');
?>
