<?php
if (isset($_GET["msg"]))
{
	$message = "Notification. ";
	switch($_GET["msg"])
	{
		case "noaccess":
			$message .= "Une erreur est survenue : vous ne pouvez pas accéder à cette page. Veuillez vous identifier.";
			break;
		case "errauth":
			$message .= "Une erreur est survenue : l'identifiant ou le mot de passe sont incorrects";
			break;
		case "modifok" :
			$message .= "Modifications bien prises en compte";
			break;
		case "newok" :
			$message .= "Nouvel employé créé";
			break;
		case "supprok" :
			$message .= "Employé supprimé";
			break;
	}
	echo "<p class='err'>".$message."</p>";
}
?>
