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

  function new_empl()
  {
    include('./includes/connexion.php');

    $req_new_empl = $connexion->prepare('
      INSERT INTO Employees (LastName, FirstName, Title, TitleOfCourtesy, BirthDate, Hiredate, Address, City, Region, PostalCode, Country, HomePhone, Notes, ReportsTo, Salary)
      VALUES (:nom, :prenom, :titre, :civilite, :naissance, :embauche, :adresse, :ville, :region, :codepost, :pays, :telephone, :notes, :boss, :salaire)
      ');

    $req_new_empl->execute(
      array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'titre' => $_POST['titre'],
        'civilite' => $_POST['civilite'],
        'naissance' => $_POST['naissance'],
        'embauche' => $_POST['embauche'],
        'adresse' => $_POST['adresse'],
        'ville' => $_POST['ville'],
        'region' => $_POST['region'],
        'codepost' => $_POST['codepost'],
        'pays' => $_POST['pays'],
        'telephone' => $_POST['telephone'],
        'extension' => $_POST['extension'],
        'notes' => $_POST['notes'],
        'boss' => $_POST['boss'],
        'salaire' => $_POST['salaire']));

  }
