<!DOCTYPE html>
<!--[index.html] /BDE website- v0.1/- 20 octobre 2019 - Developped by Merlin -->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Content-Language" content="fr">
    <meta name="Keywords" content="BDE,BDE campaign, Apollogif, Mission Apollogif, Apollo, Mission Apollo Gif, Mission Gif, Gif, Gif-Sur-Yvette, CentraleSupélec, Centrale, Supelec, BDE 2019, Mission 2019">
    <meta name="Description" content="Still undecided about the 2019 BDE campaign Vote ? Still looking for the best BDE list that will provide a wide range of fun and original activities to forget about the cloudy Gif-Su-Yvette ? Then welcome to the ApolloGif Mission, a colony of dedicated spacemen that will bring your campus experience to the infinity and beyond ! Just browse our galactic website to learn about our missions, space program, or just order some good crepes !"/>
    <link rel="prefetch" href="img/frflag.png" />
    <link rel="prefetch" href="img/enflag.png" />
    <meta name="Robots" content="index, follow">
    <meta name="Author" content="Romain Picard - Merlin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FCA025">
    <link rel="shortcut icon" type="image/svg" href="img/logo.svg" />
    <title>Apollo Gif Mission- Official Website for 2019 BDE campaign</title>
  </head>
  <body>
    <div rel="preload" id="loader" style="display:block;position:absolute;width:100%;height:100%;z-index:10000;background-color: #2d3047;text-align: center;">
        <img src="img/frame.svg" style="height:90%;max-width: 100%;display: block;margin: auto;">
    </div>
    <div id="hidescreen"></div>
    <div id="sidePanel">
      <p id="sidetitle">
        APOLLO GIF <br/> MISSION
      </p>
      <p class="sidedesc">- ORDER CREPE HERE -</p>
      <p id="sideButton">
        <a id="btnCrepe" href="https://crepes-cs.fr/">
          <button class="orderbtn">
            <span class="icon-cart"></span> CRÊPES
          </button>
        </a>
      </p>
      <p class="sidedesc">- PATH FINDER -</p>
      <p class="sideLink">
        <a href="#section2">
          <span class="icon-profil topicon"></span>
          <span class="respoTitle"> ABOUT US</span>
        </a>
      </p>
      <p class="sideLink">
        <a href="#section3">
          <span class="icon-people topicon"></span>
          <span class="respoTitle"> THE LIST</span>
        </a>
      </p>
      <p class="sideLink">
        <a href="#section4">
          <span class="icon-esports topicon"></span>
          <span class="respoTitle"> ACTIVITIES</span>
        </a>
      </p>
      <div id="sideBottom">
        <a href="#section2">About</a><br/>
        <a href="mailto:rom1.04pic@hotmail.fr">Contact us</a><br/>
        <a href="plan.html">Site map</a><br/>
      </div>
    </div>
    <header>
      <span id="menuIcon" class="toobig">
        <span class="icon-trigamme"></span>
      </span>
      <p>
        <a href="#section2">
          <span class="icon-profil topicon"></span>
          <span class="respoTitle"> ABOUT US</span>
        </a>
      </p>
      <p>
        <a href="#section3">
          <span class="icon-people topicon"></span>
          <span class="respoTitle"> THE LIST</span>
        </a>
      </p>
      <div id="BDELogoContainer">
          <h1>APOLLO GIF</h1>
      </div>
      <p>
        <a href="#section4">
          <span class="icon-esports topicon"></span>
          <span class="respoTitle"> ACTIVITIES</span>
        </a>
      </p>
      <p id="btnCrepeWrap">
        <a id="btnCrepe" href="https://crepes-cs.fr/">
          <button class="orderbtn">
            <span class="icon-cart"></span> CRÊPES
          </button>
        </a>
      </p>
    </header>
    <aside>
      <?php
        include("php/event.php");
       ?>
    </aside>
    </div>
    <main>
      <section class="section" id="section1">
        <div id="three"></div>
        <article id="DescriptionG">
          <span id="imgG">
            <img src="img/logo.svg" id="logoG">
          </span>
          <span id="titleG">
            <h2>Join the <br/>APOLLO <br/>GIF <br> Mission !</h2>
          </span>
          <div id="buttonContainer" style="color:white;margin: 40px;">
            <span id="controls">ROCKET CONTROLS</span>
            <div id="pwr">
              <div class="ctrltitle">METRICS</div>
              <span class="engine eng1">PWR ENGINE #1</span>
              <span class="engine eng2">PWR ENGINE #2</span>
              <br/>
              <span class="engine met1">SPEED</span>
              <span class="engine met2">TEMP.</span>
            </div>
            <div class="btn">
              <div class="ctrltitle">MISS. CTRL</div>
              <a href="#section2">
                <button class="orderbtn"><span id="btn-rocket" class="icon-rocket"></span>Discover the Mission</button>
              </a>
            </div>
            <div class="btn">
              <div class="ctrltitle">FOOD SUP.</div>
              <a href="https://crepes-cs.fr/">
                <button class="orderbtn"><span id="btn-cart" class="icon-cart"></span>Order some CRÊPES</button>
              </a>
            </div>
          </div>
        </article>
      </section>
      <section class="section" id="section2">
        <h2>SOMETHING ABOUT US</h2>
        <div class="descripUnit">
          <span class="descripP">
            <h3>An experimented and dedicated list</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat officiis, laborum porro aliquid pariatur provident ea id ratione beatae temporibus ex, voluptatem aut neque in dolorem tempore. Dicta ratione, cupiditate!</p>
          </span>
          <img src="img/unite.jpg" alt="Liste soudée : preuve en image!">
        </div>
        <div class="descripUnit">
          <img src="img/project.jpg" alt="Des Projets aussi solide que les QCM de CIP!">
          <span class="descripP">
            <h3>Rock-solid projects for a better campus</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat officiis, laborum porro aliquid pariatur provident ea id ratione beatae temporibus ex, voluptatem aut neque in dolorem tempore. Dicta ratione, cupiditate!</p>
          </span>
        </div>
        <div class="descripUnit">
          <span class="descripP">
            <h3>crazy activities tailored for the campus</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat officiis, laborum porro aliquid pariatur provident ea id ratione beatae temporibus ex, voluptatem aut neque in dolorem tempore. Dicta ratione, cupiditate!</p>
          </span>
          <img src="img/crowd.jpg" alt="La masse d'actis qui font rêver!">
        </div>
      </section>
      <section class="section" id="section3">
        <h2>THE LIST</h2>
        <div class="listeLigne">
          <p>The List's Leaders</p>
          <div class="listUnit">
            <img src="img/profil.png">
            <p><span class="surname">Surnom</span><br/>Brieuc Devevey</p>
            <p><span class="pole">Bureau</span><br/> President</p>
          </div>
          <div class="listUnit">
            <img src="img/profil.png">
            <p><span class="surname">Surnom</span><br/>Yvan Duhen</p>
            <p><span class="pole">Bureau</span><br/> Treasurer</p>
          </div>
          <div class="listUnit">
            <img src="img/profil.png">
            <p><span class="surname">Surnom</span><br/>Simon Tronchi</p>
            <p><span class="pole">Bureau</span><br/> Club Treasurer</p>
          </div>
          <div class="listUnit">
            <img src="img/profil.png">
            <p><span class="surname">Surnom</span><br/>Clara Rieffel</p>
            <p><span class="pole">Bureau</span><br/> General Secretary</p>
          </div>
        </div>
        <div id="hideNseeListe">
          <div class="listeLigne">
            <p>Studies Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Alban Falck</p>
              <p><span class="pole">Studies</span><br/> Studies staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Mehdi Bennis</p>
              <p><span class="pole">Studies</span><br/> Studies staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Medhi Hmene</p>
              <p><span class="pole">Studies</span><br/> Studies staff</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Companies Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Edouard Chauliac</p>
              <p><span class="pole">Companies</span><br/> Cie Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Thomas Moreau</p>
              <p><span class="pole">Companies</span><br/> Cie Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Arnaud Petit</p>
              <p><span class="pole">Companies</span><br/> Cie Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Youssef Chadali</p>
              <p><span class="pole">Companies</span><br/> Cie Staff</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Club Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Antoine Payan</p>
              <p><span class="pole">Club</span><br/> Club Staff</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Parties Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Valentin Odde</p>
              <p><span class="pole">Parties</span><br/> Parties Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Matthieu Annequin</p>
              <p><span class="pole">Parties</span><br/> VIP Staff</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Communication Seection</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Emma Lovisa</p>
              <p><span class="pole">Comunication</span><br/> Intern. Com'</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Florence Rémy</p>
              <p><span class="pole">Communication</span><br/> Extern. Com'</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Majda Brahimi</p>
              <p><span class="pole">Communication</span><br/> Design</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Romain Picard</p>
              <p><span class="pole">Communication</span><br/> Geek</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Event Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Hicham Bouanani</p>
              <p><span class="pole">Event</span><br/> Event Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Amine Larhchim</p>
              <p><span class="pole">Event</span><br/> Event Staff</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Éclipse Section</p>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Robin Delebassée</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Jean-Baptiste Peter</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Noah Vincens</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Romain Fournier</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Thomas Meot</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
            <div class="listUnit">
              <img src="img/profil.png">
              <p><span class="surname">Surnom</span><br/>Rémi Quentin</p>
              <p><span class="pole">Éclipse</span><br/> Éclipse Staff</p>
            </div>
          </div>
        </div>
        <button id="expandListe" class="button"> SHOW THE WHOLE LIST</button>
      </section>
      <section class="section" id="section4">
        <h2>THE ACTIVITIES</h2>
        <div class="actiUnit">
          <img src="img/activite.png" alt="acti">
          <h3>ACTIVITY</h3>
          <p>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae doloribus reprehenderit aspernatur dolorem ratione, autem earum magnam aperiam laudantium voluptates, hic eius consequatur error, saepe dolorum ipsa reiciendis corrupti id!</p>
        </div>
        <div class="actiUnit">
          <img src="img/activite.png" alt="acti">
          <h3>ACTIVITY</h3>
          <p>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae doloribus reprehenderit aspernatur dolorem ratione, autem earum magnam aperiam laudantium voluptates, hic eius consequatur error, saepe dolorum ipsa reiciendis corrupti id!</p>
        </div>
        <div class="actiUnit">
          <img src="img/activite.png" alt="acti">
          <h3>ACTIVITY</h3>
          <p>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae doloribus reprehenderit aspernatur dolorem ratione, autem earum magnam aperiam laudantium voluptates, hic eius consequatur error, saepe dolorum ipsa reiciendis corrupti id!</p>
        </div>
      </section>
      <section class="section" id="section5">
        <h2>THE SPONSORS</h2>
        <p id="shortDesc">The Mission wouldn't have taken off so high without them !</p>
        <div id="scene">
          <span id="sponsor">
            <img src="img/sponsors/marque1.jpg" alt="">
            <p>SPONSOR 1</p>
          </span>
          <span id="sponsor">
            <img src="img/sponsors/marque1.jpg" alt="">
            <p>SPONSOR 2</p>
          </span>
          <span id="sponsor">
            <img src="img/sponsors/marque1.jpg" alt="">
            <p>SPONSOR 3</p>
          </span>
        </div>
        <p class="endTitle">~ APOLLO GIF ~</p>
      </section>
      <footer>
        <div id="footerContainer">
          <span class="column hidecolumn">
            <h5>SERVICES</h5>
            <ul>
              <li>Crèpes</li>
              <li>Activities</li>
              <li>Meals</li>
              <li>Parties</li>
            </ul>
          </span>
          <span class="column">
            <h5 id="bottomMiddleTitle">APOLLO GIF</h5>
            <img src="img/frame.svg" alt="Logo de la liste BDE 2019 Bulldogif" id="bottomLogo">
            <p class="credits">Apollogif.cs-campus.fr - © ApolloGif/2019</p>
          </span>
          <span class="column hidecolumn">
            <h5>NEED HELP ?</h5>
            <ul>
              <li><a href="#section2">About</a></li>
              <li><a href="mailto:addr@test.com">Contact Us</a></li>
              <li><a href="plan.html">Site Map</a></li>
            </ul>
          </span>
        </div>
      </footer>
      <div id="page">
          <span id="number">1</span>
          <span id="slash">/</span>
          <span id="total">5</span>
      </div>
    </main>
    <link rel="stylesheet" type="text/css" href="icofont.css">
    <link rel="stylesheet" type="text/css" href="bdecss.css">
    <script type="text/javascript" src="js/three.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bdescript.js"></script>
    <script type="text/javascript" src="js/frontscript.js"></script>
    <script type="text/javascript" src="js/bdesimulation.js"></script>
  </body>
</html>
