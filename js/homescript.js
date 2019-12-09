// frontscript.js - 2019

/*
  BDE website - Javascript.
  bde html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

$(function ()
{
  var viewportok,
      done,
      expanded = false,
      uActivated = false,
      ceHeight = $(".CurrentEvent").css('height'),
      hsec1 = $("#section1").height(),
      hsec2 = $("#section2").height(),
      hsec3 = $("#section3").height(),
      hsec4 = $("#section4").height(),
      hsec5 = $("#section5").height();
      $("#loader").delay(1000).fadeOut();
  $("#three").css({'height': $("#section1").height()});

  if($(window).width() >= 1250)
  {
    viewportok = true;
  }else{
    viewportok = false;
    $("aside").fadeOut(200);
  }

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
  if($("main").scrollTop() >= 100 && viewportok)
  {
    hideAside();
    done = true;
  }else if(viewportok){
    showAside();
    $("#ArrowUp").fadeOut(750);
    done = false;
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

  $(window).resize(function()
  {
    $("#three").css({'height': $("#section1").height()});
    if($(window).width() >= 1250)
    {
      viewportok = true;
    }else{
      viewportok = false;
      $("aside").fadeOut(200);
    }
    if($("main").scrollTop() >= 100 && viewportok)
    {
      $(".CurrentEvent").css({'top': $(window).height() - 140});
    }
  });

  $("main").scroll(function()
  {
    if(viewportok)
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
    }
    if(getPosition() == 5)
    {
      $("aside").fadeOut(500);
    }else if(viewportok){
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
