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
    <link rel="stylesheet" type="text/css" href="escape.css">
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
    <header>
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
    <div id="EscapeSection">
      <div id="formContainer">
        <h2>RESERVEZ <br/>UN CRENEAU ESCAPE GAME !</h2>
        <!--<img src="img/logo2.svg" alt="">
        <img src="img/logo.svg" alt="">-->
        <p>Bienvenue sur la page de réservation de place pour l'escape game ! L'équipe de la mission Apollo Gif s'est démenée pour t'offrir une expérience incroyable dans les locaux même de l'asso ECSIT, professionnelle du domaine ! L'aventure commence ici, pour pouvoir t'inscrire il faut remplir ce formulaire et répondre correctement à ta première énigme ! Bon courage...</p>
        <table>
          <thead>
            <tr>
              <th>Horaire</th>
              <th>Lundi 09</th>
              <th>Mardi 10</th>
              <th>Mercredi 11</th>
              <th>Jeudi 12</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>15h00 - 15h30</td>
              <td><button class="bookbtn" id="091500">Réserver</button></td>
              <td><button class="bookbtn" id="101500">Réserver</button></td>
              <td><button class="bookbtn" id="111500">Réserver</button></td>
              <td><button class="bookbtn" id="121500">Réserver</button></td>
            </tr>
            <tr>
              <td>15h30 - 16h00</td>
              <td><button class="bookbtn" id="091530">Réserver</button></td>
              <td><button class="bookbtn" id="101530">Réserver</button></td>
              <td><button class="bookbtn" id="111530">Réserver</button></td>
              <td><button class="bookbtn" id="121530">Réserver</button></td>
            </tr>
            <tr>
              <td>16h00 - 16h30</td>
              <td><button class="bookbtn" id="091600">Réserver</button></td>
              <td><button class="bookbtn" id="101600">Réserver</button></td>
              <td><button class="bookbtn" id="111600">Réserver</button></td>
              <td><button class="bookbtn" id="121600">Réserver</button></td>
            </tr>
            <tr>
              <td>16h30 - 17h00</td>
              <td><button class="bookbtn" id="091630">Réserver</button></td>
              <td><button class="bookbtn" id="101630">Réserver</button></td>
              <td><button class="bookbtn" id="111630">Réserver</button></td>
              <td><button class="bookbtn" id="121630">Réserver</button></td>
            </tr>
            <tr>
              <td>17h00 - 17h30</td>
              <td><button class="bookbtn" id="091700">Réserver</button></td>
              <td><button class="bookbtn" id="101700">Réserver</button></td>
              <td><button class="bookbtn" id="111700">Réserver</button></td>
              <td><button class="bookbtn" id="121700">Réserver</button></td>
            </tr>
            <tr>
              <td>17h30 - 18h00</td>
              <td><button class="bookbtn" id="091730">Réserver</button></td>
              <td><button class="bookbtn" id="101730">Réserver</button></td>
              <td><button class="bookbtn" id="111730">Réserver</button></td>
              <td><button class="bookbtn" id="121730">Réserver</button></td>
            </tr>
            <tr>
              <td>18h00 - 18h30</td>
              <td><button class="bookbtn" id="091800">Réserver</button></td>
              <td><button class="bookbtn" id="101800">Réserver</button></td>
              <td><button class="bookbtn" id="111800">Réserver</button></td>
              <td><button class="bookbtn" id="121800">Réserver</button></td>
            </tr>
            <tr>
              <td>18h30 - 19h00</td>
              <td><button class="bookbtn" id="091830">Réserver</button></td>
              <td><button class="bookbtn" id="101830">Réserver</button></td>
              <td><button class="bookbtn" id="111830">Réserver</button></td>
              <td><button class="bookbtn" id="121830">Réserver</button></td>
            </tr>
            <tr>
              <td>19h00 - 19h30</td>
              <td><button class="bookbtn" id="091900">Réserver</button></td>
              <td><button class="bookbtn" id="101900">Réserver</button></td>
              <td><button class="bookbtn" id="111900">Réserver</button></td>
              <td><button class="bookbtn" id="121900">Réserver</button></td>
            </tr>
            <tr>
              <td>19h30 - 20h00</td>
              <td><button class="bookbtn" id="091930">Réserver</button></td>
              <td><button class="bookbtn" id="101930">Réserver</button></td>
              <td><button class="bookbtn" id="111930">Réserver</button></td>
              <td><button class="bookbtn" id="121930">Réserver</button></td>
            </tr>
          </tbody>
        </table>
        <form class="" action="index.html" method="post">
          <label for="team">Le nom de votre équipe :</label>
          <input type="text" id="team" name="team" placeholder="Team Rocket">
          <label for="team">Le nombre de membre de votre équipe (de 3 à 6 participants):</label>
          <input type="number" id="teamnbr" name="teamnbr" max="">
          <button type="button" id="bookingbtn"></button>
        </form>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(function ()
    {
      function verif()
      {
        if($("#team").val() != '' && !isNaN($("teamnbr").val()) && parseInt($("teamnbr").val()) < 7 && parseInt($("teamnbr").val()) > 3)
        {
          return true;
        }
        return false;
      }
      var reserve = [<?php
        date_default_timezone_set('Europe/Paris');
        include("php/connect.php");
        $return='';
        $quest = $bdd->prepare('SELECT UNIX_TIMESTAMP(date),team FROM escape WHERE reserved = 1') or die('502 - Internal Error');
        $quest->bind_result($date,$team);
        $quest->execute();
        while($quest->fetch())
        {
          $return .= '"#'.date("d",$date).date("H",$date).date("i",$date).'","'.$team.'",';
        }
        echo substr($return,0,-1);
        $quest->close();
      ?>];
      for(i=0;i<=reserve.length-1;i=i+2)
      {
        $(reserve[i]).after("<i>"+reserve[i+1]+"</i>").remove();
      }
      $(".bookbtn").click(function(){
        var element = $(this);
        $("form").fadeIn();
        $("#bookingbtn").click(function(){
          if verif()
          {
            $("form").fadeOut();
            $.post("php/resa.php",{"hour": element.attr("id"),"name": name}, function( data )
            {
              if(data == 'success' )
              {
                element.after("<b>Réservé</b>").remove();
              }else{
                alert('reservation failed. Try again later.');
              }
            });
          }else{
            alert("formulaire mal rempli !");
          }
        });
      });
    });
  </script>
</html>
