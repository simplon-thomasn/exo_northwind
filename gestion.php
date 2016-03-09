<?php
  include ('includes/header.php');
  include ('includes/fonctions.php');
  include ('includes/messages.php');

  $employees = empl_infos($_GET['id']);

  foreach ($employees as $employee)
  {
?>

<div class="row">
  <form class="form-horizontal col-lg-6" method="POST" action="modification.php?id=<?php echo $employee['EmployeeID'];?>">

  <div class="form-group">
    <legend><?php echo ' '.$employee['LastName'].' '.$employee['FirstName'].' - '.$_GET['id']?></legend>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Nom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="nom" name=" nom" value="<?php echo $employee['LastName']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Prénom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="prenom" name="prenom" value="<?php echo $employee['FirstName']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Titre</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="titre" name="titre" value="<?php echo $employee['Title']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Civilité</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="civilite" name="civilite" value="<?php echo $employee['TitleOfCourtesy']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date de naissance</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="naissance" name="naissance" value="<?php echo $employee['BirthDate']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Date embauche</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="embauche" name="embauche" value="<?php echo $employee['HireDate']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Adresse</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="adresse" name="adresse" value="<?php echo $employee['Address']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Ville</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="ville" name="ville" value="<?php echo $employee['City']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Region</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="region" name="region" value="<?php echo $employee['Region']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Code postal</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="codepost" name="codepost" value="<?php echo $employee['PostalCode']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Pays</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="pays" name="pays" value="<?php echo $employee['Country']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Téléphone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="telephone" name="telephone" value="<?php echo $employee['HomePhone']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Extension</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="extension" name="extension" value="<?php echo $employee['Extension']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Notes</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="notes" name="notes" value="<?php echo $employee['Notes']?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Salaire</label>
      <div class="col-lg-10">
        <input type="text" class="form-control input-sm" id="salaire" name="salaire" value="<?php echo $employee['Salary']?>">
      </div>
    </div>
  </div>
  <button type="submit" class="btn btn-primary btn-sm pull-right">Modifier</button>
  <a class="btn btn-default pull-right btn-sm" href="administration.php">Retour</a>

  </form>
</div>

<?php
  }

  include ('includes/footer.php');
?>
