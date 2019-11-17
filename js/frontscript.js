// frontscript.js - 2019

/*
  BDE website - Javascript.
  bde html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

$(function ()
{
  var done,
      ceHeight = $(".CurrentEvent").css('height'),
      hsec1 = Number($("#section1").css('height').slice(0,-2)),
      hsec2 = Number($("#section2").css('height').slice(0,-2)),
      hsec3 = Number($("#section3").css('height').slice(0,-2)),
      hsec4 = Number($("#section4").css('height').slice(0,-2)),
      hsec5 = Number($("#section5").css('height').slice(0,-2));
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
  if($("main").scrollTop() >= 100)
  {
    $("#retrouver").animate({'opacity': '0'});
    $("#Avenir").fadeOut(750);
    $(".CurrentEvent p").fadeOut(750);
    $(".CurrentEvent").animate({'height': '70px'},750);
    $("aside").animate({'top': '75%'});
    done = true;
  }else{
    $("#retrouver").animate({'opacity': '1'});
    $("#Avenir").fadeIn(750);
    $(".CurrentEvent p").fadeIn(750);
    $(".CurrentEvent").animate({'height': ceHeight},750);
    $("aside").animate({'top': '25%'});
    done = false;
  }
  $("main").scroll(function()
  {
    if(!done && $("main").scrollTop() >= 100)
    {
      $("#retrouver").animate({'opacity': '0'});
      $("#Avenir").fadeOut(750);
      $(".CurrentEvent p").fadeOut(750);
      $(".CurrentEvent").animate({'height': '70px'},750);
      $("aside").animate({'top': '75%'});
      done = true;
    }else if(done && $("main").scrollTop() < 100){
      $("#retrouver").animate({'opacity': '1'});
      $("#Avenir").fadeIn(750);
      $(".CurrentEvent p").fadeIn(750);
      $(".CurrentEvent").animate({'height': ceHeight},750);
      $("aside").animate({'top': '25%'});
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
});
