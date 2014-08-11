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
            <li class="active"><a href="portfolio.php#sitiweb">Portfolio</a></li>
            <?php include_once("links.php") ?>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content text-center panel">

      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-left">Portfolio</h1>
          <p class="text-left">
            <button id="btn-sitiweb" type="submit" class="btn btn-primary btn-lg">Siti Web</button>
            <button id="btn-progetti" type="submit" class="btn btn-primary btn-lg">Progetti</button>
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
-->

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

        <div class="row featurette radius bg-danger">
          <h2 class="visible-xs featurette-heading">LiberaDiretta</h2>
          <div class="col-sm-5">
            <div class="imgbox">
              <a target="_blank" href="http://liberadiretta.altervista.org/"><img class="img-responsive" src="images/portfolio/liberadiretta.png" alt="LiberaDiretta"></a>
            </div>
          </div>
          <div class="col-xs-7">
            <h2 class="hidden-xs featurette-heading">LiberaDiretta</h2>
            <p class="lead">Un esperimento di comunicazione...</p>
            <h2 class="gosite"><a target="_blank" href="http://liberadiretta.altervista.org/">Vai al sito →</a></h2>
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
        <p class="text-left lead">Ecco alcuni software che abbiamo realizzato</p>

        <hr class="featurette-divider">

        <div class="row projectsrow">

          <div class="col-xs-4">
            <h2>Minimum Spanning Tree</h2>
            <div class="projects text-center">
              <img src="http://shinworld.altervista.org/images/mst-demo.png" alt="Minimum Spanning Tree Algorithm" width="100%" height="191">
              <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/mst-demo/" class="btn btn-success btn-lg">Minimum Spanning Tree</a>
                <a target="_blank" href="http://shinworld.altervista.org/mst-demo/" target="_blank" class="btn btn-primary btn-lg">Demo</a>
            </div>
          </div>

          <div class="col-xs-4">
            <h2>CSS3 Cool Effects</h2>
            <div class="projects text-center">
              <img src="http://s7.postimg.org/bejbbdk4r/CSS3_Cool_Effects.png" alt="CSS3 Cool Effects" width="100%" height="191">
              <br><br>
                <a target="_blank" href="http://css3.openprogrammers.it" target="_blank" class="btn btn-primary btn-lg">CSS3 Cool Effects</a>
            </div>
          </div>

          <div class="col-xs-4">
            <h2>SQL Injection</h2>
            <div class="projects text-center">
              <img src="http://s30.postimg.org/r3i3a6fgh/Tris.jpg" alt="SQL Injection">
              <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/guida-sql-injection/" class="btn btn-success btn-lg">Guida SQL Injection</a>
                <a target="_blank" href="http://sqlidemo.altervista.org/" target="_blank" class="btn btn-primary btn-lg">Demo</a>
            </div>
          </div>

        </div>
        
        <div class="row projectsrow">

          <div class="col-xs-4">
            <h2>PvPStats</h2>
            <div class="projects text-center">
              <img src="http://shinworld.altervista.org/images/HTI.png" alt="PvPStats" width="100%" height="191">
              <br><br>
                <a taget="_blank" href="https://github.com/ShinDarth/PvPstats" class="btn btn-success btn-lg">PvPStats</a>
                <a target="_blank" href="http://shinworld.altervista.org/pvpstats/" class="btn btn-primary btn-lg">Demo</a>
            </div>
          </div>

          <div class="col-xs-4">
            <h2>Hunting The Invaders</h2>
            <div class="projects text-center">
              <img src="http://shinworld.altervista.org/images/HTI.png" alt="Hunting The Invaders" width="100%" height="191">
              <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/hunting-the-invaders/" class="btn btn-success btn-lg">Hunting The Invaders</a>
                <a target="_blank" href="http://shinworld.altervista.org/downloads/HuntingTheInvaders/Game.html" class="btn btn-primary btn-lg">Demo</a>
            </div>
          </div>

          <div class="col-xs-4">
            <h2>Tris in java</h2>
            <div class="projects text-center">
              <img src="http://s30.postimg.org/r3i3a6fgh/Tris.jpg" alt="Tris in Java">
              <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/tris-in-java/" class="btn btn-success btn-lg">Tris in Java</a>
                <a target="_blank" href="http://shinworld.altervista.org/downloads/Tris.jar" class="btn btn-primary btn-lg">Download</a>
            </div>
          </div>

        </div>
        
        <div class="row projectsrow">

          <div class="col-xs-4">
            <h2>UltraPixel</h2>
            <div class="projects text-center">
              <img src="https://i.ytimg.com/vi/lwTr-qDy45o/hqdefault.jpg" alt="UltraPixel" width="100%" height="191">
              <br><br>
                <a target="_blank" href="http://shinworld.altervista.org/wordpress/ultrapixel-theme-for-wordpress/" class="btn btn-success btn-lg">UltraPixel</a>
                <a target="_blank" href="http://uporangejuice.altervista.org/" class="btn btn-primary btn-lg">Demo</a>
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
          $("#progetti").fadeOut(1000);
          $("#sitiweb").delay(1000).fadeIn(1000);
        });
        $("#btn-progetti").click(function(){
          $("#sitiweb").fadeOut(1000);
          $("#progetti").delay(1000).fadeIn(1000);
        });
      });
    </script>
  </body>
</html>
