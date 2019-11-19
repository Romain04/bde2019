<?php

// connect.php - 2019

/*
  BDE website - PHP.
  BDD connexion PHP [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

try
{
	$bdd = mysqli_connect("localhost", "BDEAccess", "R0Ma;n2019bde2019", "bde2019");
}
catch(Exception $e)
{
        die('502 - Internal Error');
}
?>
