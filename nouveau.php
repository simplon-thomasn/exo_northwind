<?php

  include ('./class/Employe.class.php');

  Employe::new_empl($_POST['nom'], $_POST['prenom'], $_POST['titre'], $_POST['civilite'], $_POST['naissance'], $_POST['embauche'], $_POST['adresse'], $_POST['ville'], $_POST['region'], $_POST['codepost'], $_POST['pays'], $_POST['telephone'], $_POST['extension'], $_POST['notes'], $_POST['salaire']);

  header("location:administration.php?msg=newok");
?>
