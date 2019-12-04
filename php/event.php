<?php
include("connect.php");
date_default_timezone_set('Europe/Paris');
function timeRel($begin)
{
  if(date("j",$begin) == date("j"))
  {
    return "Aujourd'hui";
  }elseif(date("j",$begin) == date("j")+1){
    return "Demain";
  }else{
    return "Le ".date("j",$begin);
  }
}
$return = '<p class="catchphrase" id="retrouver">- OÙ NOUS RETROUVER -</p>';
$quest = $bdd->prepare('SELECT nom,description,UNIX_TIMESTAMP(begin),UNIX_TIMESTAMP(end),lieu,type FROM event WHERE begin < CURRENT_TIMESTAMP() AND end > CURRENT_TIMESTAMP()') or die('502 - Internal Error');
$quest->bind_result($nom,$description,$begin,$end,$lieu,$type);
$quest->execute();
$result = $quest->fetch();
$return = '<div class="CurrentEvent">
  <div id="topbar"></div>
  <h3><span class="icon-'.$type.'"></span> '.mb_strtoupper($nom).' </h3>
  <span class="icon-arrow_up" id="ArrowUp"></span>
  <p>'.$description.'</p>
  <p class="info">
    <span class="icon-time"></span>'.date("G",$begin).'h-'.date("G",$end).'h
    <span class="icon-explore"></span>'.$lieu.'
  </p>
  <a href="calendar.php">
    <button class="button" style="margin-top:10px;margin-left: calc(50% - 100px);">VOIR PLUS</button>
  </a>
</div>
<div id="Avenir">
  <p class="catchphrase">- ÉVÈNEMENTS À VENIR -</p>';
$quest->close();
$quest = $bdd->prepare('SELECT nom, UNIX_TIMESTAMP(begin), UNIX_TIMESTAMP(end), lieu, type FROM event WHERE begin > CURRENT_TIMESTAMP() AND begin < DATE_ADD(CURRENT_TIMESTAMP(), INTERVAL 1 DAY) LIMIT 3') or die('502 - Internal Error');
$quest->bind_result($nom,$begin,$end,$lieu,$type);
$quest->execute();
while($quest->fetch())
{
  $return .= '<div class="scheduledEvent">
    <h4 class="description">
      <span class="icon-'.$type.'"></span> '.mb_strtoupper($nom).'
    </h4>
    <p class="info"><span class="icon-time"></span>'.timeRel($begin).', '.date("G",$begin).'h
      <span class="icon-explore"></span> '.$lieu.'
    </p>
  </div>';
}
echo $return.'</div>';
