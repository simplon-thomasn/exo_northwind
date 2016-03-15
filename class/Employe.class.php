<?php
class Employe
{
  private $intId;
  private $strNom;
  private $strPrenom;
  private $strTitre;

  /**
   * Get the value of Int Id
   *
   * @return mixed
   */
  public function getIntId()
  {
      return $this->intId;
  }

  /**
   * Set the value of Int Id
   *
   * @param mixed intId
   *
   * @return self
   */
  public function setIntId($intId)
  {
      $this->intId = $intId;

      return $this;
  }

  /**
   * Get the value of Str Nom
   *
   * @return mixed
   */
  public function getStrNom()
  {
      return $this->strNom;
  }

  /**
   * Set the value of Str Nom
   *
   * @param mixed strNom
   *
   * @return self
   */
  public function setStrNom($strNom)
  {
      $this->strNom = $strNom;

      return $this;
  }

  /**
   * Get the value of Str Prenom
   *
   * @return mixed
   */
  public function getStrPrenom()
  {
      return $this->strPrenom;
  }

  /**
   * Set the value of Str Prenom
   *
   * @param mixed strPrenom
   *
   * @return self
   */
  public function setStrPrenom($strPrenom)
  {
      $this->strPrenom = $strPrenom;

      return $this;
  }

  /**
   * Get the value of Str Titre
   *
   * @return mixed
   */
  public function getStrTitre()
  {
      return $this->strTitre;
  }

  /**
   * Set the value of Str Titre
   *
   * @param mixed strTitre
   *
   * @return self
   */
  public function setStrTitre($strTitre)
  {
      $this->strTitre = $strTitre;

      return $this;
  }


    public function __construct($id, $nom, $prenom, $titre)
    {
      $this->intId = $id;
      $this->strNom = $nom;
      $this->strPrenom = $prenom;
      $this->strTitre = $titre;
    }

    public static function empl_cnt($inLogin, $inPass )
    {
      include('./includes/connexion.php');

      $identification = $connexion->prepare ('
        SELECT EmployeeID, LastName, FirstName, Title
        FROM Employees
        WHERE Login = :login AND Pass = :pass');

      $identification->execute(
        array(
          'login' => $inLogin,
          'pass' => $inPass));

      if ($identification->rowCount() == 1)
      {
        $infosEmpl = $identification->fetch();

        return $infosEmpl;
      }
      else
      {
        header("location:identification.php?msg=errauth");
      }
    }

}
