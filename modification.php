<?php
  include ("./includes/fonctions.php");

  //$var = (int)$_GET['id'];
  //echo gettype($var);
  modif_empl($_GET['id']);
  header("location:administration.php?msg=modifok");
?>
