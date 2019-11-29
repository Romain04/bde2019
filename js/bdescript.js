// bdescript.js - 2019

/*
  BDE website - Javascript.
  bde html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

$(function ()
{
  $("#menuIcon").click(function(){
    $("#hidescreen").fadeIn(400);
    $("#sidePanel").animate({'left':'0'},400);
  });
  $("#hidescreen").click(function(){
    $("#hidescreen").fadeOut(400);
    $("#sidePanel").animate({'left': -0.7*$(window).width()},400);
  });
});
