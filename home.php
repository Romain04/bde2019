<!DOCTYPE html>
<!--[index.html] /BDE website- v0.1/- 20 octobre 2019 - Developped by Merlin -->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="Content-Language" content="fr">
    <meta name="Keywords" content="BDE, campagne BDE, Apollogif, Mission Apollogif, Apollo, Mission Apollo Gif, Mission Gif, Gif, Gif-Sur-Yvette, CentraleSupélec, Centrale, Supelec, BDE 2019, Mission 2019">
    <meta name="Description" content="Still undecided about the 2019 BDE campaign Vote ? Still looking for the best BDE list that will provide a wide range of fun and original activities to forget about the cloudy Gif-Su-Yvette ? Then welcome to the ApolloGif Mission, a colony of dedicated spacemen that will bring your campus experience to the infinity and beyond ! Just browse our galactic website to learn about our missions, space program, or just order some good crepes ! ">
    <link rel="prefetch" href="img/frflag.png" />
    <link rel="prefetch" href="img/enflag.png" />
    <meta name="Robots" content="index, follow">
    <meta name="Author" content="Romain Picard - Merlin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FCA025">
    <link rel="shortcut icon" type="image/svg" href="img/logo.svg" />
    <title>ApolloGif Mission - Official Website</title>
  </head>
  <body>
    <div rel="preload" id="loader" style="display:block;position:absolute;width:100%;height:100%;z-index:10000;background-color: #2d3047;text-align: center;">
        <img src="img/frame.svg" style="height:90%;max-width: 100%;display: block;margin: auto;">
    </div>
    <div id="hidescreen"></div>
    <div id="sidePanel">
      <p id="sidetitle">
        MISSION <br/> APOLLO GIF
      </p>
      <p class="sidedesc">- ORDER CREPÊS -</p>
      <p id="sideButton">
        <a id="btnCrepe" href="https://crepes-cs.fr/">
          <button class="orderbtn">
            <span class="icon-cart"></span> CRÊPES
          </button>
        </a>
      </p>
      <p class="sidedesc">- FIND YOUR TRAJECTORY -</p>
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
        <a href="#section2">ABOUT</a><br/>
        <a href="mailto:rom1.04pic@hotmail.fr">CONTACT US</a><br/>
        <a href="plan.html">SITE MAP</a><br/>
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
      <p class="catchphrase">- COME MEET US THERE -</p>
      <div class="CurrentEvent">
        <div id="topbar"></div>
        <h3><span class="icon-attraction"></span> COUP DE POING</h3>
        <span class="icon-arrow_up" id="ArrowUp"></span>
        <p>Show us your strength and bodybuilder body at this funfair game !</p>
        <p class="info">
          <span class="icon-time"></span>8h-23h
          <span class="icon-explore"></span>Canapés Bouygues (Stand)
        </p>
        <a href="#section4">
          <button class="button" style="margin-top:10px;margin-left: calc(50% - 100px);">VOIR PLUS</button>
        </a>
      </div>
      <div id="Avenir">
        <p class="catchphrase">- UPCOMING EVENT -</p>
        <div class="scheduledEvent">
          <h4 class="description">
            <span class="icon-esports"></span> ARCADE GAME
          </h4>
          <p class="info"><span class="icon-time"></span>Today, 8h-23h
            <span class="icon-explore"></span> Canapés Bouygues (Stand)
          </p>
        </div>
        <div class="scheduledEvent">
          <h4 class="description">
            <span class="icon-fastfood"></span> STAND MEAL
          </h4>
          <p class="info"><span class="icon-time"></span>Today, 11h-13h
            <span class="icon-explore"></span> Canapés Bouygues (Stand)
          </p>
        </div>
        <div class="scheduledEvent">
          <h4 class="description">
            <span class="icon-run"></span> ESCAPE GAME
          </h4>
          <p class="info"><span class="icon-time"></span>Today, 15h-20h
            <span class="icon-explore"></span> Sc.266
          </p>
        </div>
      </div>
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
            <h2>Join the<br/>APOLLO<br/>GIF <br/>MISSION !</h2>
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
            <h3>President's message</h3>
            <p>5, 4, 3, 2, 1, We have a lift off! The ApolloGif Mission is set to send you right into the stars during this interstellar campaign week ! <br>
            The Apollos are 26 astronauts overtrained on their way to conquer the centralesupelec galaxy. A very motivated list wich is ready to leave tou starry-eyed thanks to many surprises during this week - which will sure be epic! Determined to make the student and associative life even better, and inhabited by an electric will, our list is ready for anything during this week, and hopefully, the year to come! Course, associative cohesion, life on the campus, our projects and our cosmic campaign will convince you to choose the apollogif Mission for the BDE 2019!</p>
          </span>
          <img src="img/unite.jpg" alt="Liste soudée : preuve en image!">
        </div>
        <div class="descripUnit">
          <img src="img/project.jpg" alt="Des Projets aussi solide que les QCM de CIP!">
          <span class="descripP">
            <h3>Rock-solid projects for the campus</h3>
            <p>The Apollogif Mission commits itself to recentre the role of the BDE! We will focus on improvements to help students, associations and the school with our projects! We put forward three lines of thinking which will help us reach this aim: projects intended for the course and the school, projects addressed towards the associations and companies, as well as projects meant to improve student life at centraleSupélec!</p>
          </span>
        </div>
        <div class="descripUnit">
          <span class="descripP">
            <h3>Awesome Activities</h3>
            <p>Crazy activities tailored for the campus' students ! check them with the button below:</p>
            <a href="#actis">
              <button class="button" style="margin-top:10px;margin-left: calc(50% - 100px);">READ MORE</button>
            </a>
          </span>
          <img src="img/crowd.jpg" alt="La masse d'actis qui font rêver!">
        </div>
      </section>
      <section class="section" id="section3">
        <h2>THE LIST</h2>
        <div class="listeLigne">
          <p>The "Bureau"</p>
          <div class="listUnit">
            <img src="img/photo/Brieuc.jpg">
            <p><span class="surname">Apollogif</span><br/>Brieuc Devevey</p>
            <p><span class="pole">Bureau</span><br/> Prez</p>
          </div>
          <div class="listUnit">
            <img src="img/photo/Yvan.jpg">
            <p><span class="surname">Apollogif</span><br/>Yvan Duhen</p>
            <p><span class="pole">Bureau</span><br/> Trez</p>
          </div>
          <div class="listUnit">
            <img src="img/photo/Simon.jpg">
            <p><span class="surname">Apollogif</span><br/>Simon Tronchi</p>
            <p><span class="pole">Bureau</span><br/> Trez Clubs</p>
          </div>
          <div class="listUnit">
            <img src="img/photo/Clara.jpg">
            <p><span class="surname">Apollogif</span><br/>Clara Rieffel</p>
            <p><span class="pole">Bureau</span><br/> SecGen</p>
          </div>
        </div>
        <div id="hideNseeListe">
          <div class="listeLigne">
            <p>"Études" Section</p>
            <div class="listUnit">
              <img src="img/photo/Alban.jpg">
              <p><span class="surname">Apollogif</span><br/>Alban Falck</p>
              <p><span class="pole">Études</span><br/> VP Études</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Mehdi.jpg">
              <p><span class="surname">Apollogif</span><br/>Mehdi Bennis</p>
              <p><span class="pole">Études</span><br/> VP Études</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Mehdi H.jpg">
              <p><span class="surname">Apollogif</span><br/>Medhi Hmene</p>
              <p><span class="pole">Études</span><br/> VP Études</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>"Entreprise" Section</p>
            <div class="listUnit">
              <img src="img/photo/Edouard.jpg">
              <p><span class="surname">Apollogif</span><br/>Edouard Chauliac</p>
              <p><span class="pole">Entreprise</span><br/> VP Ent'</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Thomas Moreau.jpg">
              <p><span class="surname">Apollogif</span><br/>Thomas Moreau</p>
              <p><span class="pole">Entreprise</span><br/> VP Ent'</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/bite.jpg">
              <p><span class="surname">Apollogif</span><br/>Arnaud Petit</p>
              <p><span class="pole">Entreprise</span><br/> VP Ent'</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Youssef.jpg">
              <p><span class="surname">Apollogif</span><br/>Youssef Chadali</p>
              <p><span class="pole">Entreprise</span><br/> VP Ent'</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Club Section</p>
            <div class="listUnit">
              <img src="img/photo/Antoine.jpg">
              <p><span class="surname">Apollogif</span><br/>Antoine Payan</p>
              <p><span class="pole">Club</span><br/> VP Club</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>"Soirées" Section</p>
            <div class="listUnit">
              <img src="img/photo/Valentin.jpg">
              <p><span class="surname">Apollogif</span><br/>Valentin Odde</p>
              <p><span class="pole">Soirées</span><br/> VP Soirée</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Matthieu.jpg">
              <p><span class="surname">Apollogif</span><br/>Matthieu Annequin</p>
              <p><span class="pole">Soirées</span><br/> VP Prestige</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Communication Section</p>
            <div class="listUnit">
              <img src="img/photo/Emma.jpg">
              <p><span class="surname">Apollogif</span><br/>Emma Lovisa</p>
              <p><span class="pole">Comunication</span><br/> Com. Int'</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Florence.jpg">
              <p><span class="surname">Apollogif</span><br/>Florence Rémy</p>
              <p><span class="pole">Communication</span><br/> Com. Ext'</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Majda.jpg">
              <p><span class="surname">Apollogif</span><br/>Majda Brahimi</p>
              <p><span class="pole">Communication</span><br/> VP Design</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Romain Picard.jpg">
              <p><span class="surname">Apollogif</span><br/>Romain Picard</p>
              <p><span class="pole">Communication</span><br/> VP Geek</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>Event Section</p>
            <div class="listUnit">
              <img src="img/photo/Hicham.jpg">
              <p><span class="surname">Apollogif</span><br/>Hicham Bouanani</p>
              <p><span class="pole">Event</span><br/> VP Event</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Amine.jpg">
              <p><span class="surname">Apollogif</span><br/>Amine Larhchim</p>
              <p><span class="pole">Event</span><br/> VP Event</p>
            </div>
          </div>
          <div class="listeLigne">
            <p>"Éclipse" Section</p>
            <div class="listUnit">
              <img src="img/photo/Robin.jpg">
              <p><span class="surname">Apollogif</span><br/>Robin Delebassée</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/JB.jpg">
              <p><span class="surname">Apollogif</span><br/>Jean-Baptiste Peter</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Noah.jpg">
              <p><span class="surname">Apollogif</span><br/>Noah Vincens</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Romain Fournier.jpg">
              <p><span class="surname">Apollogif</span><br/>Romain Fournier</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Thomas Meot.jpg">
              <p><span class="surname">Apollogif</span><br/>Thomas Meot</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
            <div class="listUnit">
              <img src="img/photo/Remi.jpg">
              <p><span class="surname">Apollogif</span><br/>Rémi Quentin</p>
              <p><span class="pole">Éclipse</span><br/> VP Éclipse</p>
            </div>
          </div>
        </div>
        <button id="expandListe" class="button"> SHOW THE WHOLE LIST</button>
      </section>
      <section class="section" id="section4">
        <h2>ACTIVITIES</h2>
        <div class="actiUnit">
          <img src="img/actis/punch.png" alt="campus">
          <h3>COUP DE POING</h3>
          <p>Show us your muscles here !</p>
        </div>
        <div class="actiUnit">
          <img src="img/actis/arcade.png" alt="campus">
          <h3>BORNE D'ARCADE</h3>
          <p>Wanna defeat pac-man ? ya know where to find da yellow dude, hommie!</p>
        </div>
        <div class="actiUnit">
          <img src="img/actis/jump.png" alt="campus">
          <h3>BAG JUMP</h3>
          <p>To feel like you're floating in the air just like an astronaut, come test our huge bag jump !</p>
        </div>
        <div class="actiUnit">
          <img src="img/actis/space.png" alt="campus">
          <h3>SPACE BALL</h3>
          <p>Interested in adding the mention "astronaut" to your Resumee? Then come test our space ball first!</p>
        </div>
        <div class="actiUnit">
          <img src="img/actis/escape.png" alt="campus">
          <h3>ESCAPE GAME</h3>
          <p>Will you get out of the room in less than 30 minutes, with only the help of your mind, comrades and a flashlight ?</p>
        </div>
        <div class="actiUnit">
          <img src="img/actis/laser.png" alt="campus">
          <h3>LASER GAME</h3>
          <p>Wanna destroy some alien faces ? You're at the right place; Just take that laser weapon, and let's go!</p>
        </div>
        <h2 id="actis">THE PROJECTS</h2>
        <div class="actiUnit">
          <img src="img/campus.png" alt="campus">
          <h3>Representation of the internationals on the campus</h3>
          <p>Afin d'améliorer la représentation des étudiants au sein de l'école, nous proposons de réserver un poste de délégué de promotion à un élève en échange international. Elu par la communauté internationale de CentraleSupélec, ce nouveau poste permettra de susciter plus d'engouement pour les élections des délégués de promotion.</p>
        </div>
        <div class="actiUnit">
          <img src="img/calendar.png" alt="campus">
          <h3>Society Calendar</h3>
          <p>Toi aussi tu as du mal à t'y retrouver dans tous les événements organisés à CentraleSupélec ? Tu aimerais partager des informations sur ton club au reste du campus ? Notre VP Clubs et  la Com Int’ s’associent pour te faciliter l’accès aux informations des clubs par la création d’un calendrier hebdomadaire qui sera affiché sur le bocal (local BDE) en diagonale Eiffel. </p>
        </div>
        <div class="actiUnit">
          <img src="img/book.png" alt="campus">
          <h3>Associations Booklet</h3>
          <p>Les amphis et apéros de recrutement au début de l'année sont nombreux et tu n'as peut-être pas pu aller te renseigner sur toutes les associations qui t'intéressaient... Afin que les GPAs n'aient aucun regret, la Mission Apollo Gif s’engage à lancer la rédaction d'un livret des associations. Méthodes de sélection, postes, objectifs… tout résumé sur un seul support !</p>
        </div>
        <div class="actiUnit">
          <img src="img/student.png" alt="campus">
          <h3>Inter-campus Week-ends</h3>
          <p>Nous te proposons d’organiser des week-ends de cohésion avec les campus de province pour rencontrer les autres étudiants de CentraleSupélec. Organisés sur les différents campus, ils seront l’opportunité de les visiter et d’améliorer l’intégration de tous les étudiants de l’école. </p>
        </div>
        <div class="actiUnit">
          <img src="img/tournament.png" alt="campus">
          <h3>Inter-étage Tournament</h3>
          <p>Une fois les recrutements associatifs finis et la folie de l’intégration loin derrière toi, tu aimerais continuer de rencontrer du monde ? Nous te proposons d’organiser un tournoi inter-étages sur le campus en novembre, sous le format d’une activité par semaine pour ne pas gêner les tracos ! </p>
        </div>
        <div class="actiUnit">
          <img src="img/history.png" alt="campus">
          <h3>Memory Booklet</h3>
          <p>Puisque l’école dispose d’un passé riche, nous avons à cœur de distribuer aux étudiants un livret relatant l’histoire de l’Ecole Centrale et Supélec ainsi que celle de la fusion. Rentrer à CentraleSupélec, c’est avant tout intégrer une communauté ancienne. Un accès facilité à cet héritage permettra de renforcer le sentiment d’appartenance.</p>
        </div>
      </section>
      <section class="section" id="section5">
        <h2>SPONSORS</h2>
        <p id="shortDesc">The mission wouldn't have taken off that high without those helpfull hands:</p>
        <div id="scene">
          <span id="sponsor">
            <img src="img/Sponsors/richesmont.png" alt="">
            <p>RichesMont</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/Lydia.png" alt="">
            <p>Lydia</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/bnp.png" alt="">
            <p>BNP Paribas</p>
          </span>
        </div>
        <div id="scene">
          <span id="sponsor">
            <img src="img/Sponsors/spie.png" alt="">
            <p>Spie Batignolles</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/wei.png" alt="">
            <p>Wei and Go</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/casa.png" alt="">
            <p>Casa Street</p>
          </span>
        </div>
        <div id="scene">
          <span id="sponsor">
            <img src="img/Sponsors/heetch.png" alt="">
            <p>Heetch</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/just.png" alt="">
            <p>Just Eat</p>
          </span>
          <span id="sponsor">
            <img src="img/Sponsors/part.png" alt="">
            <p>Partelya</p>
          </span>
        </div>
        <h2>SPECIAL THANKS</h2>
        <p id="shortDesc">AdR - FACS - BDE - Pics - Hyris - C-Mix - SBCS - Toucan Déchaîné - ViaRézo - Ecsit - BdI</p>
        <p class="endTitle">~ APOLLO GIF ~</p>
      </section>
      <footer>
        <div id="footerContainer">
          <span class="column hidecolumn">
            <h5>SERVICES</h5>
            <ul>
              <li>Crèpes</li>
              <li>Activities</li>
              <li>Meal</li>
              <li>Parties</li>
            </ul>
          </span>
          <span class="column">
            <h5 id="bottomMiddleTitle">APOLLO GIF</h5>
            <img src="img/frame.svg" alt="Logo de la liste BDE 2019 Bulldogif" id="bottomLogo">
            <p class="credits">Apollogif.cs-campus.fr - © ApolloGif/2019</p>
          </span>
          <span class="column hidecolumn">
            <h5>NEED HELP?</h5>
            <ul>
              <li><a href="#section2">About us</a></li>
              <li><a href="mailto:rom1.04pic@hotmail.fr">contact us</a></li>
              <li><a href="plan.html">site map</a></li>
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
    <script type="text/javascript" src="js/homescript.js"></script>
    <script type="text/javascript" src="js/bdesimulation.js"></script>
  </body>
</html>
