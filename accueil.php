<?php
  session_start();
  include ('includes/header.php');
  include ('includes/messages.php');
  include ('includes/fonctions.php');
  include_once ('class/Employe.class.php');

  if (isset($_POST['login']) && isset($_POST['pass']))
  {
      $infosEmpl = Employe::empl_cnt($_POST['login'], $_POST['pass']);

      $objEmplConnecte = new Employe($infosEmpl[0], $infosEmpl[1], $infosEmpl[2], $infosEmpl[3]);
      $_SESSION['objEmpl'] = $objEmplConnecte;
  }

  echo '<pre>';
  print_r($_SESSION['objEmpl']);
  echo '</pre>';

  var_dump($objEmplConnecte);
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
          <td><?php echo $objEmplConnecte->getIntId(); ?></td>
          <td><?php echo $objEmplConnecte->getStrNom(); ?></td>
          <td><?php echo $objEmplConnecte->getStrPrenom(); ?></td>
          <td><?php echo $objEmplConnecte->getStrTitre(); ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>



<?php include ('includes/footer.php');?>
