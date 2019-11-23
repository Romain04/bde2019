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
      size = [400,300,200],
      expanded = false,
      uActivated = false,
      ceHeight = $(".CurrentEvent").css('height'),
      hsec1 = $("#section1").height(),
      hsec2 = $("#section2").height(),
      hsec3 = $("#section3").height(),
      hsec4 = $("#section4").height(),
      hsec5 = $("#section5").height();

  if($(window).width() >= 1250)
  {
    viewportok = true;
  }else{
    viewportok = false;
    $("aside").fadeOut(200);
  }

  if($(window).width() <= 1000)
  {
    size = ['80%',500,$(window).width()*0.4];
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

  function hidescreenBegin()
  {
    $("#loader").fadeOut(750);
    $("#hidescreen").off("click", "**", hidescreenBegin);
  }

  function language()
  {
    var lang = 'fr';
    $("#loader img").fadeOut(200,function(){
      $("#loader").append("<div id='reveal'></div>");
      $("#reveal").fadeOut(0).css({'color':'white'}).html(`
      <h3 id="langTitle">LANGUE / <span class='ang'>LANGUAGE</span></h3>
      <div class="formcol" id="fr">
        <img src="img/frflag.png" alt="Drapeau Fançais / French Flag"/>
        <p>Français</p>
        <p class="lcheckbox icon-check_box"></p>
      </div>
      <div class="formcol" id="en">
        <img src="img/enflag.png" alt="Drapeau Anglais / English Flag"/>
        <p><span class='ang'>English</span></p>
        <p class="lcheckbox icon-unchecked_box"></p>
      </div>
      <button id="langButton" class="button"> OK </button>
      `).delay(200).fadeIn(200,function(){
        $("#fr").click(function()
        {
          if(lang != 'fr')
          {
            $("#fr > .lcheckbox").removeClass("icon-unchecked_box").addClass("icon-check_box");
            $("#en > .lcheckbox").removeClass("icon-check_box").addClass("icon-unchecked_box");
            lang = 'fr';
          }
        });
        $("#en").click(function()
        {
          if(lang != 'en')
          {
            $("#en > .lcheckbox").removeClass("icon-unchecked_box").addClass("icon-check_box");
            $("#fr > .lcheckbox").removeClass("icon-check_box").addClass("icon-unchecked_box");
            lang = 'en';
          }
        });
        $("#hidescreen").click(hidescreenBegin);
        $("#langButton").click(function()
        {
          if(lang == 'en')
          {
            document.location.href = "/en/home.html";
          }
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

  $("#hidescreen").fadeIn(10);

  $("#loader").delay(1000).animate({'width': size[0],'height': size[1],'top':$(window).height()/2 - size[1]/2,'left':$(window).width()/2 - size[2]},700,language);

  if($("main").scrollTop() >= 100 && viewportok)
  {
    hideAside();
    done = true;
  }else if(viewportok){
    showAside();
    $("#ArrowUp").fadeOut(750);
    done = false;
  }

  $(window).resize(function(){
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
