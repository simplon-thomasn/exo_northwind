<?php

  function get_infos()
  {
    include('./includes/connexion.php');

    $identification = $connexion->prepare ('
      SELECT EmployeeID, LastName, FirstName, Title
      FROM Employees
      WHERE Login = :login AND Pass = :pass');

    $identification->execute(
      array(
        'login' => $_POST['login'],
        'pass' => $_POST['pass']));

    if ($identification->rowCount() == 1)
    {
      $infosEmpl = $identification->fetch();

      session_start();
      $_SESSION['ID'] = $infosEmpl[0];
      $_SESSION['Nom'] = $infosEmpl[1];
      $_SESSION['Prenom'] = $infosEmpl[2];
      $_SESSION['Titre'] = $infosEmpl[3];

      return $infosEmpl;

    }
    else
    {
      header("location:identification.php?msg=errauth");
    }
  }

  function affiche_empl($id = null)
  {

    include('./includes/connexion.php');

    if ($id == null)
    {
      $req_employees = $connexion->query('
        SELECT *
        FROM Employees');

      $employees = $req_employees->fetchAll();

      return $employees;
    }
    else
    {
      $req_employees = $connexion->prepare('
        SELECT *
        FROM Employees
        WHERE EmployeeID = :id');

      $req_employees->execute(
        array(
          'id' => $_GET['id']));

      $employees = $req_employees->fetchAll();

      return $employees;

    }

  }
