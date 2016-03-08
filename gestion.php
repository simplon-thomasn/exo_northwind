<?php
  include ('includes/header.php');
  include ('includes/fonctions.php');
  include ('includes/messages.php');

  $employees = affiche_empl($_GET['id']);

  foreach ($employees as $employee)
  {
?>

<div class="row">
  <form class="form-horizontal col-lg-6" method="POST" action="administration.php">

  <div class="form-group">
    <legend><?php echo ' '.$employee['LastName'].' '.$employee['FirstName']?></legend>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Nom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['LastName']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Prénom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['FirstName']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Titre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Title']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Mrs / Mme</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['TitleOfCourtesy']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date de naissance</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['BirthDate']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date embauche</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['HireDate']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Adresse</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Address']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Ville</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['City']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Region</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Region']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Code postal</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['PostalCode']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Pays</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Country']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Téléphone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['HomePhone']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Extension</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Extension']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Notes</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Notes']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Responsable</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['ReportsTo']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Salaire</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="text" value="<?php echo $employee['Salary']?>">
      </div>
    </div>
  </div>

  <div class="form-horizontal">
    <a class="btn btn-default pull-right" href="administration.php" onclick="modifier()">Modifier</a>
    <a class="btn btn-default pull-right" href="administration.php" onclick="supprimer()">Supprimer</a>
  </div>
</form>
</div>

<?php
  }

  include ('includes/footer.php');
?>
