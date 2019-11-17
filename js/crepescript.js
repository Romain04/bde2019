// crepescript.js - 2019

/*
  BDE website - Javascript.
  crepe html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

var content = [`<h2>FORMULAIRE DE COMMANDE</h2>
<form action="">
  <label for="nom"><span class="icon-profil"></span>NOM :</legend><br/>
  <input type="text" name="nom" class="inputs"><br/>
  <label for="prenom"><span class="icon-profil"></span>PRENOM :</label><br/>
  <input type="text" name="prenom" class="inputs"><br/>
  <label for="count"><span class="icon-cart"></span>NOMBRE DE CRÊPES :</label><br/>
  <div id="inputwrap">
    <div class="inputgrp button" id="moins"><span class="icon-remove"></span></div>
    <input type="text" name="count" value="1" class="inputgrp">
    <div class="inputgrp button" id="plus"><span class="icon-add"></span></div><br/>
  </div>
  <label for="lieu"><span class="icon-map"></span>DESTINATION :</label><br/>
  <input type="text" name="lieu" class="inputs">
  <p type="submit" class="button" id="submit">Valider</p>
</form>`,
`<h2>VÉRIFICATION DE LA COMMANDE</h2>
<p class="info"> Pensez à bien vérifier le nom et l'adresse, la commande ne pourra pas etre traitée si ces données sont erronées ! </p>
<p>La commande sera livrée à :</p>
<p class="result"><span class="icon-profil"></span>Romain PICARD</p>
<p>Lieu de Livraison :</p>
<p class="result"><span class="icon-map"></span>4CB105</p>
<p>Nombre de crêpe(s) commandée(s):</p>
<p class="result"><span class="icon-cart"></span>5</p>
<button type="button" class="button" id="commander"> VALIDER </button>`,
`<h2>COMMANDE ENREGISTRÉE !</h2>
<p>Merci beaucoup pour ta commande de crêpes ! Alors, comment ca s'est passé la commande ?</p>
<p id="satisfaction">
  <span class="icon-confused"></span>
  <span class="icon-sad"></span>
  <span class="icon-neutral"></span>
  <span class="icon-smile"></span>
  <span class="icon-happy"></span>
</p>
<p>Maintenant qu'on courre te les apporter tu as le choix:</p>
<button class="button">Patienter...</button>
<a href="index.html"><button class="button">Visiter le site</button></a>
<p>more to come ;)</p>`];

$(function ()
{
  $("#VRco").click(function(){
    $("#formContainer").fadeOut(750, function()
    {
      $("#formContainer").html(content[0])
    }).fadeIn(750, function()
    {
      $("#submit").click(function(){
        $("#formContainer").fadeOut(750, function()
        {
          $("#formContainer").html(content[1])
        }).fadeIn(750, function()
        {
          $("#commander").click(function(){
            $("#formContainer").fadeOut(750, function()
            {
              $("#formContainer").html(content[2])
            }).fadeIn(750, function()
          {
            $("#satisfaction > span").click(function()
            {
              $("#satisfaction").html("<p>MERCI DE TA RÉPONSE !</p>")
            });
          });
            $("#line3").addClass('ldone');
            $("#element4").addClass('done');
          });
          $("#line2").addClass('ldone');
          $("#element3").addClass('done');
        });
      });
      $("#line1").addClass('ldone');
      $("#element2").addClass('done');
    });
  });
});
