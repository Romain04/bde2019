<?php

// autocplt.php - 2019

/*
  BDE website - PHP.
  crepe autocompletion PHP [v0.1]
  Developed by Romain Picard - Merlin/2019
*/
require("connect.php");
$input = strip_tags($_POST["input"]);
$quest = $bdd->prepare('SELECT nom FROM lieu WHERE nom REGEXP ? or surnom REGEXP ?') or die(print_r($bdd->error));
$quest->bind_param("ss", $input, $input);
$quest->bind_result($result);
$quest->execute();
$lieux = array();
while($quest->fetch()){
  echo '<p class="formvalue">'.$result.'</p>';
}
$quest->close();
