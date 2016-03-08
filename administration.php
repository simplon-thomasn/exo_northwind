<?php
  include ('includes/header.php');
  include ('includes/fonctions.php');
  include ('includes/messages.php');

  $employees = affiche_empl();
?>

<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-striped table-condensed">
    <caption>
      <h4>NORTHWIND - EFFECTIFS</h4>
    </caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Titre</th>
        <th>Ville</th>
        <th>Gestion</th>
      </tr>
    </thead>
    <tbody>

<?php
  foreach ($employees as $employee)
  {
?>
      <tr id='<?php echo $employee['EmployeeID']; ?>'>
        <td><?php echo $employee['EmployeeID']; ?></td>
        <td><?php echo $employee['LastName']; ?></td>
        <td><?php echo $employee['FirstName']; ?></td>
        <td><?php echo $employee['Title']; ?></td>
        <td><?php echo $employee['City']; ?></td>
        <td><a class="btn btn-default" href="gestion.php?id=<?php echo $employee['EmployeeID'];?>">Gestion</a></td>
      </tr>
<?php
  }
?>
    <a class="btn btn-default pull-right" href="gestion.php">Créer nouveau</a>
    </tbody>
  </table>
</div>
</div>

<?php include ('includes/footer.php');?>
