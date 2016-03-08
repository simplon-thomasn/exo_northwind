<?php

  $serveur = 'localhost';
  $login = 'root';
  $pass = 'laTerlen801012';

  try{
    $connexion = new PDO("mysql:host=$serveur;dbname=northwind", $login, $pass);
    $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connexion à la base de données réussie<br /><br /><br />';
  }

  catch (PDOException $e) {
    echo 'Echec de la connexion : '.$e->getMessage();
  }

?>
