// frontscript.js - 2019

/*
  BDE website - Javascript.
  bde html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

$(function ()
{
  var done,
      expanded = false,
      uActivated = false,
      ceHeight = $(".CurrentEvent").css('height'),
      hsec1 = $("#section1").height(),
      hsec2 = $("#section2").height(),
      hsec3 = $("#section3").height(),
      hsec4 = $("#section4").height(),
      hsec5 = $("#section5").height();

  function getPosition()
  {
    var scroll = $("main").scrollTop();
    if(scroll < hsec1*0.5)
    {
      return 1;
    }else if(scroll < hsec1*0.5+hsec2){
      return 2;
    }else if(scroll < hsec1*0.5+hsec2+hsec3){
      return 3;
    }else if(scroll < hsec1*0.5+hsec2+hsec3+hsec4){
      return 4;
    }else{
      return 5;
    }
  }

  function language()
  {
    $("#loader img").fadeOut(200,function(){
      $("#loader").append("<div id='reveal'></div>");
      $("#reveal").fadeOut(0).css({'color':'white'}).html(`
      <h3 id="langTitle">LANGUE / <span class='ang'>LANGUAGE</span></h3>
      <div class="formcol">
        <img src="img/frflag.png" alt="Drapeau Fançais / French Flag"/>
        <p>Français</p>
        <p class="icon-check_box"></p>
      </div>
      <div class="formcol">
        <img src="img/enflag.png" alt="Drapeau Anglais / English Flag"/>
        <p><span class='ang'>English</span></p>
        <p class="icon-unchecked_box"></p>
      </div>
      <button id="langButton" class="button"> OK </button>
      `).delay(200).fadeIn(200,function(){
        $("#langButton").click(function()
        {
          $("#hidescreen").fadeOut(750);
          $("#loader").fadeOut(750);
        });
      });
    });
  }

  function showAside()
  {
    $("#retrouver").animate({'opacity': '1'});
    $("#Avenir").fadeIn(750);
    $(".CurrentEvent p").fadeIn(750);
    $(".CurrentEvent").css({'cursor':'auto'});
    $(".CurrentEvent").animate({'height': ceHeight},750);
    $("aside").animate({'top': '150px'});
  }

  function hideAside()
  {
    $("#retrouver").animate({'opacity': '0'});
    $("#Avenir").fadeOut(750);
    $(".CurrentEvent p").fadeOut(750);
    $("#ArrowUp").fadeIn(750);
    $(".CurrentEvent").css({'cursor':'pointer'});
    $(".CurrentEvent").animate({'height': '70px'},750);
    $("aside").animate({'top': $(window).height() - 140});
    arrow();
  }

  function cross()
  {
    $(".CurrentEvent").off();
    $(".CurrentEvent").click(function()
    {
      $("#ArrowUp").removeClass("icon-cross").addClass("icon-arrow_up").fadeIn(750);
      hideAside();
      $("#Avenir").css({'background-color':'rgba(0,0,0,0)'});
      uActivated = false;
      arrow();
    });
  }

  function arrow()
  {
    $(".CurrentEvent").off();
    $(".CurrentEvent").click(function()
    {
      $("#ArrowUp").removeClass("icon-arrow_up").addClass("icon-cross").fadeIn(750);
      showAside();
      $("#Avenir").css({'background-color':'rgba(0,0,0,0.7)'});
      uActivated = true;
      cross();
    });
  }

  $("#loader").delay(1000).animate({'width': 400,'height': 300,'top':$(window).height()/2 - 150,'left':$(window).width()/2 - 200},700,language);

  if($("main").scrollTop() >= 100)
  {
    hideAside();
    done = true;
  }else{
    showAside();
    $("#ArrowUp").fadeOut(750);
    done = false;
  }

  $(window).resize(function(){
    if($("main").scrollTop() >= 100)
    {
      $(".CurrentEvent").css({'top': $(window).height() - 140});
    }
  });

  $("main").scroll(function()
  {
    if(!done && $("main").scrollTop() >= 100)
    {
      hideAside();
      $(".CurrentEvent").click(arrow);
      done = true;
    }else if(!uActivated && done && $("main").scrollTop() < 100){
      showAside();
      $("#ArrowUp").fadeOut(750);
      done = false;
    }
    if(getPosition() === 5)
    {
      $("aside").fadeOut(500);
    }else{
      $("aside").fadeIn(500);
    }
    $("#number").html(getPosition());
  });
  $("#expandListe").click(function()
  {
    if(expanded)
    {
      expanded = false
      $("#expandListe").html("MONTRER TOUTE LA LISTE");
      $("#hideNseeListe").fadeOut(750);
    }else{
      expanded = true
      $("#expandListe").html("MASQUER LA LISTE");
      $("#hideNseeListe").fadeIn(750);
    }
  });
});
