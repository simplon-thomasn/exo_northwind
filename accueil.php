<?php
  include ('includes/header.php');
  include ('includes/messages.php');
  include ("includes/connexion.php");
  include ('includes/fonctions.php');
  include_once ('class/Employe.class.php');

  $infosEmpl = get_infos();

  $objEmpl = new Employe ($infosEmpl[0], $infosEmpl[1], $infosEmpl[2], $infosEmpl[3]);
?>

  <div class="row">
    <div class="col-md-4">
      <table class="table table-bordered table-striped table-condensed">
      <caption>
        <h4>Vos infos</h4>
      </caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Titre</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $_SESSION['ID']; ?></td>
          <td><?php echo $_SESSION['Nom']; ?></td>
          <td><?php echo $_SESSION['Prenom']; ?></td>
          <td><?php echo $_SESSION['Titre']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<?php include ('includes/footer.php');?>
