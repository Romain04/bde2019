<?php

// autocplt.php - 2019

/*
  BDE website - PHP.
  crepe autocompletion PHP [v0.1]
  Developed by Romain Picard - Merlin/2019
*/
require("connect.php");
$protect = array('"',"'","/","\\","#","[","]","{","}","(",")","_",":",";",",","!","?","@","+","=","`","%","^","-","&","|");
$input = str_replace($protect, "", strip_tags($_POST["input"]));
$quest = $bdd->prepare('SELECT nom,surnom FROM lieu WHERE nom REGEXP ? or surnom REGEXP ?') or die('502 - Internal Error');
$quest->bind_param("ss", $input, $input);
$quest->bind_result($nom,$surnom);
$quest->execute();
$lieux = array();
while($quest->fetch()){
  $val = '';
  if(!empty($surnom))
  {
    $val = ', '.$surnom;
  }
  echo '<p class="formvalue">'.$nom.$val.'</p>';
}
$quest->close();
