// bdescript.js - 2019

/*
  BDE website - Javascript.
  bde html's Javascript [v0.1]
  Developed by Romain Picard - Merlin/2019
*/

$(function ()
{
  $("#menuIcon").click(function(){
    $("#hidescreen").fadeIn(750);
    $("#sidePanel").animate({'left':'0'},750);
  });
  $("#hidescreen").click(function(){
    $("#hidescreen").fadeOut(750);
    $("#sidePanel").animate({'left':'-300px'},750);
  });
});
