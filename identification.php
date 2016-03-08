<?php
  include('includes/header.php');
  include ('includes/messages.php');
?>

<form class="col-md-6" method="POST" action="accueil.php">
  <legend>NORTHWIND</legend>
  <div class="form-group">
    <label for="login">Login :</label>
    <input id="login" name="login" type="text" class="form-control"/>
  </div>
  <div class="form-group">
    <label for="pass">Pass :</label>
    <input id="pass" name="pass" type="password" class="form-control"/>
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Se connecter</button>
</form>

<a class="btn btn-default" href="administration.php">Administration</a>

<?php include ('includes/footer.php');?>
