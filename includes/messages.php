<?php
if (isset($_GET["msg"]))
{
	$message = "Une erreur est survenue. ";
	switch($_GET["msg"])
	{
		case "noaccess":
			$message .= "Vous ne pouvez pas accéder à cette page. Veuillez vous identifier.";
			break;
		case "errauth":
			$message .= "L'identifiant ou le mot de passe sont incorrects";
			break;
	}
	echo "<p class='err'>".$message."</p>";
}
?>
