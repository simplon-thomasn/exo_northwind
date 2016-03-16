<?php
  session_start();
  include ('includes/header.php');
  include ('includes/fonctions.php');
  include ('includes/messages.php');
  include_once ('class/Employe.class.php');
  
  $ListeEmployes = Employe::ChargerEmployes();
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
        <th>Suppression</th>
      </tr>
    </thead>
    <tbody>

<?php
  foreach ($ListeEmployes as $employe)
  {
?>
      <tr id='<?php echo $employe['EmployeeID']; ?>'>
        <td><?php echo $employe['EmployeeID']; ?></td>
        <td><?php echo $employe['LastName']; ?></td>
        <td><?php echo $employe['FirstName']; ?></td>
        <td><?php echo $employe['Title']; ?></td>
        <td><?php echo $employe['City']; ?></td>
        <td><a class="btn btn-default" href="gestion.php?id=<?php echo $employe['EmployeeID'];?>">Gestion</a></td>
        <td><a class="btn btn-default" href="suppression.php?id=<?php echo $employe['EmployeeID'];?>">Suppression</a></td>
      </tr>
<?php
  }
?>
    <a class="btn btn-default pull-right" href="gestion1.php">Créer nouveau</a>
    </tbody>
  </table>
</div>
</div>

<?php include ('includes/footer.php');?>
