<?php

// connect.php - 2019

/*
  BDE website - PHP.
  BDD connexion PHP [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

try
{
	$bdd = mysqli_connect("global-db", "apollogif.fr-mQTTQu", "9ARFlJ7MGUdO", "apollogif_fr");
}
catch(Exception $e)
{
        die('502 - Internal Error');
}
?>
