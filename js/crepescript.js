// crepescript.js - 2019

/*
  BDE website - Javascript.
  crepe html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

var content = [`<h2>FORMULAIRE DE COMMANDE</h2>
<form action="">
  <label for="nom"><span class="icon-profil"></span>NOM :</legend><br/>
  <input type="text" name="nom" id="nom" class="inputs"><br/>
  <label for="prenom"><span class="icon-profil"></span>PRENOM :</label><br/>
  <input type="text" name="prenom" id="prenom" class="inputs"><br/>
  <label for="count"><span class="icon-cart"></span>NOMBRE DE CRÊPES :</label><br/>
  <div id="inputwrap">
    <div class="inputgrp button" id="moins"><span class="icon-remove"></span></div>
    <input type="text" name="count" id="count" value="1" class="inputgrp">
    <div class="inputgrp button" id="plus"><span class="icon-add"></span></div><br/>
  </div>
  <label for="lieu"><span class="icon-map"></span>DESTINATION :</label><br/>
  <input type="text" name="lieu" id="lieu" class="inputs">
  <div id="autocplt" class="inputs">
    <p id="data"> - Entrez une destination et validez la ici - </p>
  </div>
  <p type="submit" class="button" id="submit">Valider</p>
</form>`,
`<h2>VÉRIFICATION DE LA COMMANDE</h2>
<p class="info"> Pensez à bien vérifier le nom et l'adresse, la commande ne pourra pas etre traitée si ces données sont erronées ! </p>
<p>La commande sera livrée à :</p>
<p class="result" id="nomCom"><span class="icon-profil"></span></p>
<p>Lieu de Livraison :</p>
<p class="result" id="lieuCom"><span class="icon-map"></span></p>
<p>Nombre de crêpe(s) commandée(s):</p>
<p class="result" id="countCom"><span class="icon-cart"></span></p>
<button type="button" class="button" id="commander"> VALIDER </button>`,
`<h2>COMMANDE ENREGISTRÉE !</h2>
<p>Merci beaucoup pour ta commande de crêpes ! Alors, comment ça s'est passé la commande ?</p>
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

function sweep(text)
{
  text = text.replace(/(<([^>]+)>)/ig,"");
  return text.replace(/[\-\'\"_;,:\\\/?!|\{\}\[\]#~=@`\+^]+/ig,"");
}

function regexForge(text)
{
  text = text.replace("é","e");
  position = text.search(/[a-zA-Z][0-9]/ig)+1;
  return text.slice(0,position)+'\.*'+text.slice(position,position+1)+'\.*'+text.slice(position+1);
}

$(function ()
{
  function validate(values)
  {
    var nom = sweep($("#nom").val()), prenom = sweep($("#prenom").val()), count = parseInt(sweep($("#count").val())), lieu = sweep($("#lieu").val());
    if(values)
    {
      return [nom,prenom,count,lieu]
    }
    if(nom != '' && prenom != '' && count > 0 && count <= 10 && lieu != '')
    {
      return true;
    }
    return false;
  }

  $("#VRco").click(function(){
    $("#formContainer").fadeOut(750, function()
    {
      $("#formContainer").html(content[0])
    }).fadeIn(750, function()
    {
      $("#submit").click(function(){
        if(validate(false))
        {
          values = validate(true);
          $("#formContainer").fadeOut(750, function()
          {
            $("#formContainer").html(content[1])
          }).fadeIn(750, function()
          {
            $("#nomCom").append(values[0]+' '+values[1]);
            $("#lieuCom").append(values[3]);
            $("#countCom").append(values[2]);
            $("#commander").click(function(){
              $.post("php/add.php",{input: values});
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
        }else{
          alert("Formulaire mal rempli !");
        }
      });
      $("#count").blur(function()
      {
        if(isNaN($("#count").val()) === true)
        {
          $("#count").val(1);
        }else if(parseInt($("#count").val()) > 10)
        {
          $("#count").val(10);
        }else if(parseInt($("#count").val()) < 1)
        {
          $("#count").val(1);
        }
      });
      $("#lieu").keyup(function()
      {
        $.post("php/autocplt.php", {input: regexForge(sweep($("#lieu").val()))}, function(data)
        {
          $("#data").html(data);
          $(".formvalue").click(function()
          {
            $("#lieu").val($(this).text());
            $('#data').html('<p style="text-align:center;font-size:30px;">Lieu validé ;)</p>')
          });
        });
      });
      $("#plus").click(function()
      {
        if($("#count").val() < 10)
        {
          $("#count").val(parseInt($("#count").val()) + 1);
        }
      });
      $("#moins").click(function()
      {
        if($("#count").val() > 1)
        {
          $("#count").val(parseInt($("#count").val()) - 1);
        }
      });
      $("#line1").addClass('ldone');
      $("#element2").addClass('done');
    });
  });
});
