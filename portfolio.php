<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Realizzazione Siti Web">
    <meta name="author" content="Francesco e Stefano Borzì">
    <link rel="shortcut icon" href="favicon.ico">

    <title>OpenProgrammers.it</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="hidden-sm navbar-brand" href="home.php">OpenProgrammers.it</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="chisiamo.php">Chi siamo</a></li>
            <li><a href="webdesign.php">WebDesign</a></li>
            <li class="active"><a href="portfolio.php">Portfolio</a></li>
            <?php include_once("links.php") ?>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content text-center">

      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-left">Portfolio</h1>
          <p class="text-left">
            <button id="btn-sitiweb" type="submit" class="btn btn-lg">Siti Web</button><button id="btn-progetti" type="submit" class="btn btn-lg">Progetti</button>
          </p>
        </div>      
      </div>
      <div id="sitiweb">
        <p class="text-left lead">Ecco alcuni dei siti web che abbiamo realizzato...</p>
        <!--
        <hr class="featurette-divider">

        <div class="row featurette radius" style="background-color: #E8EBD0;">
          <h2 class="visible-xs featurette-heading">Ormaprofessional</h2>
            <div class="col-sm-7">
            <br class="hidden-xs">
            <br class="hidden-xs">
            <h2 class="hidden-xs featurette-heading">Ormaprofessional</h2>
            <p class="lead">Linea cosmetica per cani e gatti, prodotti non testati sugli animali.</p>
            <h2 class="gosite"><a target="_blank" href="http://www.ormaprofessional.it/">Vai al sito →</a></h2>
          </div>
          <div class="col-sm-5">
            <div class="imgbox">
            <a target="_blank" href="http://www.ormaprofessional.it/"><img class="img-responsive" src="images/portfolio/ormaprofessional.png" alt="Ormaprofessional"></a>
            </div>
          </div>
        </div>
        -->

        <hr class="featurette-divider">

        <div class="row featurette radius bg-danger">
          <h2 class="visible-xs featurette-heading">LiberaDiretta</h2>
          <div class="col-sm-5">
            <div class="imgbox">
              <a target="_blank" href="http://liberadiretta.altervista.org/"><img class="img-responsive" src="images/portfolio/liberadiretta.png" alt="LiberaDiretta"></a>
            </div>
          </div>
          <div class="col-sm-7">
            <h2 class="hidden-xs featurette-heading">LiberaDiretta</h2>
            <p class="lead ld">Libera Diretta &egrave; un esperimento di comunicazione, effettuato attraverso il sistema hangout di Google, per affrontare IN DIRETTA una serie di questioni di attualit&agrave;, politica, economia, cultura, attinenti all'Italia, ma anche di respiro internazionale. Chiunque voglia pu&ograve; partecipare alla trasmissione, intervenendo direttamente nello hangout, oppure commentando tramite Youtube e Facebook. Vogliamo essere uno spazio di libero confronto, alternativo a quello dei mass media tradizionali.</p>
            <h2 class="gosite"><a target="_blank" href="http://liberadiretta.altervista.org/">Vai al sito →</a></h2>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette radius" style="background-color: #ededed;">
          <h2 class="visible-xs featurette-heading">Jo Frederiks</h2>
          <div class="col-sm-5">
            <div class="imgbox">
              <a target="_blank" href="http://jofrederiks.altervista.org"><img class="img-responsive" src="images/portfolio/jofrederiks.png" alt="Jo Frederiks"></a>
            </div>
          </div>
          <div class="col-sm-7">
            <br class="hidden-xs">
            <br class="hidden-xs">
            <h2 class="hidden-xs featurette-heading">Jo Frederiks</h2>
            <p class="lead">Jo Frederiks è un artista vegana australiana che utilizza le sue opere d'arte per raccontare le sofferenze che gli animali subiscono per mano dell'uomo.</p>
            <h2 class="gosite"><a target="_blank" href="http://jofrederiks.altervista.org/">Vai al sito →</a></h2>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette radius bg-info">
          <h2 class="visible-xs featurette-heading">Foto e Video Corallo</h2>
          <div class="col-sm-7">
            <br><br>
            <h2 class="hidden-xs featurette-heading">Foto e Video Corallo</h2>
            <p class="lead">Azienda fotografica attiva da oltre 40 anni</p>
            <h2 class="gosite"><a target="_blank" href="http://photoevideocorallo.it">Vai al sito →</a></h2>
          </div>
          <div class="col-sm-5">
            <div class="imgbox">
              <a target="_blank" href="http://photoevideocorallo.it"><img class="img-responsive" src="images/portfolio/corallovideo.png" alt="Foto e Video Corallo"></a>
            </div>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette radius bg-warning">
          <h2 class="visible-xs featurette-heading">Progettazione-interni.org</h2>
          <div class="col-sm-7">
            <h2 class="hidden-xs featurette-heading">Progettazione-interni.org</h2>
            <p class="lead">Studio della distribuzione degli spazi, di ristrutturazioni e di arredamento.</p>
            <h2 class="gosite"><a target="_blank" href="http://progettazione-interni.org">Vai al sito →</a></h2>
          </div>
          <div class="col-sm-5">
            <div class="imgbox">
              <a target="_blank" href="http://progettazione-interni.org"><img class="img-responsive" src="images/portfolio/progettazioneinterni.png" alt="Progettazione-Interni.org"></a>
            </div>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette radius bg-success">
          <h2 class="visible-xs featurette-heading">Azienda Agricola</h2>
          <div class="col-sm-5">
            <div class="imgbox">
              <img class="img-responsive" src="images/portfolio/aziendaagricola.png" alt="Azienda Agricola">
            </div>
          </div>
          <div class="col-sm-7">
            <h2 class="hidden-xs featurette-heading">Azienda Agricola</h2>
            <p class="lead">Commercio di arance, mandarini, albicocche, olive, melograni...</p>
            <h2 class="gosite"><b>Link non disponibile</b></h2>
          </div>
        </div>

        <hr class="featurette-divider">
      </div>

      <div id="progetti">
        <p class="text-left lead">Ecco alcuni progetti che abbiamo realizzato...</p>

        <hr class="featurette-divider">

        <div class="row projectsrow">

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>Minimum Spanning Tree</h2>
                <p>Simulatore di algoritmi per trovare l’<a href="http://it.wikipedia.org/wiki/Albero_ricoprente" target="_blank">albero di copertura minimo</a> di un <a href="http://it.wikipedia.org/wiki/Grafo">grafo</a> connesso con <a href="http://it.wikipedia.org/wiki/Arco_(teoria_dei_grafi)" target="_blank">archi</a> non orientati.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="http://shinworld.altervista.org/images/mst-demo.png" alt="Minimum Spanning Tree Algorithm">
                </div>
                <div>
                  <br><br><br><br><p class="visible-md"><br></p>
                  <a target="_blank" href="http://shinworld.altervista.org/wordpress/mst-demo/" class="btn btn-success btn-lg">Minimum Spanning Tree</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>CSS3 Cool Effects</h2>
                <p>CSS3 Cool Effects è un sito che raccoglie tutti gli effetti CSS3 ideati e programmati da OpenProgrammers.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="http://s7.postimg.org/bejbbdk4r/CSS3_Cool_Effects.png" alt="CSS3 Cool Effects">
                </div>
                <br><br>
                <a target="_blank" href="http://css3.openprogrammers.it" target="_blank" class="btn btn-primary btn-lg">CSS3 Cool Effects</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>SQL Injection</h2>
                <p>Introduzione all'SQL Injection ed applicazione web esemplificativa.</p>
              </div>
              <div class="projects">
                <img class="img-responsive" src="images/portfolio/sqlidemo.png" alt="SQL Injection">
                <br><br><p class="visible-sm"><br></p>
                <div class="hidden-md">
                  <a target="_blank" href="http://shinworld.altervista.org/wordpress/guida-sql-injection/" class="btn btn-success btn-lg">Guida SQL Injection</a>
                  <a target="_blank" href="http://sqlidemo.altervista.org/" target="_blank" class="btn btn-primary btn-lg">Demo</a>
                </div>
                <div class="visible-md gotop">
                  <br><br>
                  <a target="_blank" href="http://shinworld.altervista.org/wordpress/guida-sql-injection/" class="btn btn-success btn-lg">Guida SQL Injection</a><br>
                  <a target="_blank" href="http://sqlidemo.altervista.org/" target="_blank" class="btn btn-primary btn-lg">Demo</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>PvPstats</h2>
                <p>Sistema di statistiche per CMaNGOS e TrinityCore scritto facendo uso dei linguaggi C++, SQL, PHP, JavaScript, HTML e CSS.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="images/PvPstats.png" alt="PvPstats">
                </div>
                <br><br>
                <a target="_blank" href="https://github.com/ShinDarth/PvPstats" class="btn btn-success btn-lg">PvPstats</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>Hunting The Invaders</h2>
                <p>Hunting The Invaders è un gioco ideato e programmato (in Javascript) interamente da OpenProgrammers.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" height="100" src="http://shinworld.altervista.org/images/HTI.png" alt="Hunting The Invaders">
                </div>
                <br><br>
                <div class="hidden-md">
                  <a target="_blank" href="http://shinworld.altervista.org/wordpress/hunting-the-invaders/" class="btn btn-success btn-lg">Hunting The Invaders</a>
                  <a target="_blank" href="http://shinworld.altervista.org/downloads/HuntingTheInvaders/Game.html" class="btn btn-primary btn-lg">Demo</a>
                  </div>
                <div class="visible-md gotop">
                  <a target="_blank" href="http://shinworld.altervista.org/wordpress/hunting-the-invaders/" class="btn btn-success btn-lg">Hunting The Invaders</a><br>
                  <a target="_blank" href="http://shinworld.altervista.org/downloads/HuntingTheInvaders/Game.html" class="btn btn-primary btn-lg">Demo</a>
                  <br><br><br><br>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>HTML-BBCode converter</h2>
                <p>Convertitore da HTML a BBCode scritto in Java per un progetto di Ingegneria del Software.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="images/convertitore.png" alt="HTML-BBCode converter">
                </div>
                <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/convertitore-html-bbcode-scritto-in-java/" class="btn btn-success btn-lg">Convertitore HTML-BBCode</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>Huffman Encoding</h2>
                <p>Codifica di Huffman implementata in C++</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="http://shinworld.altervista.org/images/huffman.png" alt="Huffman C++">
                </div>
                <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/implementare-la-codifica-di-huffman-in-c/" class="btn btn-success btn-lg">Codifica di Huffman</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>CKJM</h2>
                <p>Tool per valutare la modularità di software Java.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="images/ckjm.png" alt="ckjm fragm">
                </div>
                <br><br><p class="visible-md"><br></p>
                <a target="_blank" href="https://github.com/ShinDarth/ckjm" class="btn btn-success btn-lg">CKJM</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>Tris in java</h2>
                <p>Questo è il famoso gioco <a href="http://it.wikipedia.org/wiki/Tic-tac-toe">Tic Tac Toe</a>, meglio conosciuto come Tris, programmato in Java con un' "Intelligenza Artificiale" imbattibile!</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="http://s30.postimg.org/r3i3a6fgh/Tris.jpg" alt="Tris in Java">
                </div>
                <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/tris-in-java/" class="btn btn-success btn-lg">Tris in Java</a>
                <a target="_blank" href="http://shinworld.altervista.org/downloads/Tris.jar" class="btn btn-primary btn-lg">Download</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="projectsdiv">
              <div class="projecttext">
                <h2>UltraPixel</h2>
                <p>Vecchio tema per WordPress, non più sviluppato, che realizzammo diversi anni fa.</p>
              </div>
              <div class="projects">
                <div class="projectimg">
                  <img class="img-responsive" src="https://i.ytimg.com/vi/lwTr-qDy45o/hqdefault.jpg" alt="UltraPixel">
                </div>
                <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/ultrapixel-theme-for-wordpress/" class="btn btn-success btn-lg">UltraPixel</a>
                <a target="_blank" href="https://www.youtube.com/watch?v=lwTr-qDy45o" class="btn btn-primary btn-lg">Demo</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#btn-sitiweb").click(function(){
          $("#btn-sitiweb").css("border-bottom", "2px solid white");
          $("#btn-progetti").css("border-bottom", "4px solid #ededed");
          $("#btn-progetti").css("background-color", "#eee");
          $("#btn-sitiweb").css("background-color", "transparent");
          $("#sitiweb").css("border-top", "2px solid white");
          $("#progetti").fadeOut(1000);
          $("#sitiweb").delay(1000).fadeIn(1000);
          $('#sitiweb').delay().queue( function(next){
              $(this).css('border-top','2px solid #eee');
              next();
            });
        });
        $("#btn-progetti").click(function(){
          $("#btn-progetti").css("border-bottom", "2px solid white");
          $("#btn-sitiweb").css("border-bottom", "4px solid #ededed");
          $("#btn-progetti").css("background-color", "transparent");
          $("#btn-sitiweb").css("background-color", "#eee");
          $("#progetti").css("border-top", "2px solid white");
          $("#sitiweb").fadeOut(1000);
          $("#progetti").delay(1000).fadeIn(1000);
          $('#progetti').delay().queue(function(next){
              $(this).css('border-top','2px solid #eee');
              next();
            });
        });
      });
    </script>
  </body>
</html>
