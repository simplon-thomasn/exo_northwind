<?php

  function ChargerEmployes($id = null)
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

  function modif_empl()
  {
    include('./includes/connexion.php');

    if ($id = $_GET['id'])
    {
      $id = (int)$_GET['id'];
      //echo gettype($get_id);
      //echo $get_id;

      $req_modif_empl = $connexion->prepare('
        UPDATE Employees
        SET
          LastName = :nom,
          FirstName = :prenom,
          Title = :titre,
          TitleOfCourtesy = :civilite,
          BirthDate = :naissance,
          Hiredate = :embauche,
          Address = :adresse,
          City = :ville,
          Region = :region,
          PostalCode = :codepost,
          Country = :pays,
          HomePhone = :telephone,
          Extension = :extension,
          Notes = :notes,
          Salary = :salaire
        WHERE EmployeeId = :id');

      $req_modif_empl->execute(
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
          'salaire' => $_POST['salaire'],
          'id' => $id));
    }

  }


  function suppr_empl()
  {
    include('./includes/connexion.php');

    if ($id = $_GET['id'])
    {
      $id = (int)$_GET['id'];
      //echo gettype($get_id);
      //echo $get_id;

      $req_modif_empl = $connexion->prepare('
        DELETE FROM Employees
        WHERE EmployeeId = :id');

      $req_modif_empl->execute(
        array(
          'id' => $id));
    }

  }
