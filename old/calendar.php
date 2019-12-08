<!DOCTYPE html>
<!--[escape.php] /BDE website- v0.1/- 20 octobre 2019 - Developped by Merlin -->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Content-Language" content="fr">
    <meta name="Keywords" content="BDE, campagne BDE, Apollogif, Mission Apollogif, Apollo, Mission Apollo Gif, Mission Gif, Gif, Gif-Sur-Yvette, CentraleSupélec, Centrale, Supelec, BDE 2019, Mission 2019">
    <meta name="Description" content="T'es encore indécis(e) sur la liste à élir pour la campagne BDE ? Tu recherches des activités cool et originales pour tromper la grisaille du plateau giffois ? Ou tu veux juste savourer une bonne crepe directement chez toi? Alors bienvenue sur le site d'Apollo Gif l'ami(e), fais comme chez toi ! Ici, tu peux retrouver toutes nos infos, nos tronches, nos actis et nos fameuses crêpes qui régalent et jalousent toute la concurrence ! ">
    <meta name="Robots" content="index, follow">
    <meta name="Author" content="Romain Picard - Merlin">
    <link rel="stylesheet" type="text/css" href="icofont.css">
    <link rel="stylesheet" type="text/css" href="bdecss.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bdescript.js"></script>
    <title>Mission Apollo Gif - Site officiel de la liste BDE CentraleSupélec 2019</title>
  </head>
  <body style="overflow:auto;">
    <div id="hidescreen"></div>
    <div id="sidePanel">
      <p id="sidetitle">
        MISSION <br/> APOLLO GIF
      </p>
      <p class="sidedesc">- COMMANDER DES CREPÊS -</p>
      <p id="sideButton">
        <a id="btnCrepe" href="crepe.html">
          <button id="orderbtn2">
            <span class="icon-cart"></span> CRÊPES
          </button>
        </a>
      </p>
      <p class="sidedesc">- TROUVER SON CHEMIN -</p>
      <p class="sideLink">
        <a href="index.html#section2">
          <span class="icon-profil topicon"></span>
          <span class="respoTitle"> LA LISTE</span>
        </a>
      </p>
      <p class="sideLink">
        <a href="index.html#section3">
          <span class="icon-people topicon"></span>
          <span class="respoTitle"> LES LISTEUX</span>
        </a>
      </p>
      <p class="sideLink">
        <a href="index.html#section4">
          <span class="icon-esports topicon"></span>
          <span class="respoTitle"> LES ACTIS</span>
        </a>
      </p>
      <div id="sideBottom">
        <a href="#section2">À propos</a><br/>
        <a href="mailto:rom1.04pic@hotmail.fr">Nous contacter</a><br/>
        <a href="plan.html">Plan du site</a><br/>
      </div>
    </div>
    <header style="visibility: hidden;">
      <span id="menuIcon" class="toobig">
        <span class="icon-trigamme"></span>
      </span>
      <p>
        <a href="index.html#section2">
          <span class="icon-profil topicon"></span>
          <span class="respoTitle"> LA LISTE</span>
        </a>
      </p>
      <p>
        <a href="index.html#section3">
          <span class="icon-people topicon"></span>
          <span class="respoTitle"> LES LISTEUX</span>
        </a>
      </p>
      <div id="BDELogoContainer">
          <h1><a href="index.html">APOLLO GIF</a></h1>
      </div>
      <p>
        <a href="index.html#section4">
          <span class="icon-esports topicon"></span>
          <span class="respoTitle"> LES ACTIS</span>
        </a>
      </p>
      <p id="btnCrepeWrap">
        <a id="btnCrepe" href="crepe.html">
          <button id="orderbtn2">
            <span class="icon-cart"></span> CRÊPES
          </button>
        </a>
      </p>
    </header>
      <?php
      include("php/connect.php");
      $quest = $bdd->prepare('SELECT nom, description, begin, end, lieu, type FROM event') or die('502 - Internal Error');
      $quest->bind_result($nom,$desc,$begin,$end,$lieu,$type);
      $quest->execute();
      while($quest->fetch())
      {
        echo '<h2>'.$nom.'</h2><br/><p>'.$desc.'</p><p>'.$begin.' - '.$end.'</p><p>'.$lieu.'</p>';
      }
      ?>
  </body>
</html>
