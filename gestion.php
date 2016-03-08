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
    <label for="select" class="col-lg-2 control-label">Select: </label>
      <div class="col-lg-10">
        <select id="select" class="form-control" >
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group">
    <button class="pull-right btn btn-default">Envoyer</button>
  </div>
</form>
</div>

<?php
  }
?>
    </tbody>
  </table>
</div>
</div>

<?php include ('includes/footer.php');?>
