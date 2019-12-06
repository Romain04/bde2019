<?php
/*include("connect.php");
$quest = $bdd->prepare('SELECT UNIX_TIMESTAMP(date) FROM escape WHERE reserved = 1') or die('502 - Internal Error');
$quest->bind_result($date);
$quest->execute();
while($quest->fetch())
{
  $return .= '"#'.date("d",$date).date("H",$date).date("i",$date).'",';
}
echo substr($return,0,-1);
$quest->close();*/
echo 'success';
