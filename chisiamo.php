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
            <li class="active"><a href="chisiamo.php">Chi siamo</a></li>
            <li><a href="webdesign.php">WebDesign</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <?php include_once("links.php") ?>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content">

      <div class="row">
        <div class="col-md-6 text-right animation">
          <h2 align="center">Francesco Borzì</h2>
          <div class="row">
            <div class="col-xs-4">
              <img class="radius" alt="Francesco Borzì" src="images/francesco.png" width="100%">
            </div>
            <div class="col-xs-8 text-justify">
              <p>La programmazione per me è stata sempre una grande passione.</p>
              <p>A 16 anni ho messo in piedi un piccolo server privato di <a href="http://it.wikipedia.org/wiki/World_of_Warcraft">World of Warcraft</a> cominciando a lavorare con applicazioni <strong>game-server</strong> open source come <a href="http://it.wikipedia.org/wiki/MaNGOS">MaNGOS</a> e <a href="http://www.trinitycore.org/">TrinityCore</a>.</p>
              <p>A 21 anni mi sono laureato in Informatica riportando la votazione di <strong>105</strong>/110 presso l'Università di Catania.</p>
              <p>Attualmente sto proseguendo gli studi per ottenere la laurea specialistica in <strong>Sistemi e Sicurezza</strong>, contemporaneamente lavoro come <strong>WebDeveloper</strong> presso l'azienda <a href="http://www.italiahotspot.it">ItaliaHotSpot</a>.</p>
            </div>
          </div>
          <span class="glyphicon glyphicon-envelope hidden-xs" style="font-size: 25px; float: left; margin-top: 20px; margin-bottom: 30px;">
            <a href="mailto:borzifrancesco@gmail.com">borzifrancesco@gmail.com</a>
          </span>
          <span class="text-center glyphicon glyphicon-envelope visible-xs" style="font-size: 18px; margin-top: 20px; margin-bottom: 30px;">
            <a href="mailto:borzifrancesco@gmail.com">borzifrancesco@gmail.com</a>
          </span>
          <br><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
          <p class="h4 text-center">Il mio lavoro con ItaliaHotSpot</p>
          <p class="text-left">Offriamo dei servizi di navigazione in internet via wireless ad attività commerciali.<br><br>Diamo la possibilità ad alberghi, bar e attività di ogni genere di concedere alla propria clientela la possibilità di connettersi alla rete wifi effettuando l'accesso tramite Facebook.<br><br>I clienti si collegano alla rete mettendo il "mi piace" alla pagina Facebook dell'attività commerciale, e condividono automaticamente un link che la pubblicizza.</p>
          <p class="h4 text-center">Per maggiori informazioni:</p>
          <p class="h4 text-center"><a href="http://www.wifi-social.it">www.wifi-social.it</a></p>
        </div>
        <div class="col-md-6 text-left animation">
          <br class="hidden-lg hidden-md">
          <br class="hidden-lg hidden-md">
          <h2 align="center">Stefano Borzì</h2>
          <div class="row">
            <div class="col-xs-8 text-justify">
              <p>Sono un giovane appassionato di informatica, attualmente frequento il quinto anno del Liceo Scientifico PNI (Piano Nazionale di Informatica).</p>
              <p>La programmazione e la realizzazione di siti web è la mia attività preferita.</p>
              <p>Mi piace stare sempre al passo con la tecnologia apprendendo tutte le nuove tecniche del web in circolazione.</p>
              <p>Sono il responsabile tecnico informatico del progetto <a href="http://youtube.com/salvocd">LiberaDiretta</a> di cui gestisco il sito web.</p>
            </div>
            <div class="col-xs-4">
              <img class="radius" style="" alt="Stefano Borzì" src="images/stefano.png" width="100%">
            </div>
          </div>
          <span class="glyphicon glyphicon-envelope hidden-xs" style="font-size: 25px; float: right; margin-top: 55px;">
            <a href="mailto:stefanoborzi32@gmail.com">stefanoborzi32@gmail.com</a>
          </span>
          <span class="text-center glyphicon glyphicon-envelope visible-xs" style="font-size: 18px; margin-top: 20px;">
            <a href="mailto:stefanoborzi32@gmail.com">stefanoborzi32@gmail.com</a>
          </span>
          <br><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs"><br class="hidden-xs">
          <p class="text-center h4">L'ultima puntata che abbiamo realizzato con LiberaDiretta</p>
          <div id="ldnews"></div>
          <script type="text/javascript">
            var gdata = document.createElement("script");
            gdata.src = "https://gdata.youtube.com/feeds/api/users/salvocd/uploads?v=2&alt=json&callback=getdata";
            var head = document.getElementsByTagName("head")[0];
            head.appendChild(gdata);
            var getdata= function(info)
            {
              var i=0;
              var T = info.feed.entry[i].title["$t"];
              while(T.indexOf("LIBERA DIRETTA") == -1){ i++; T = info.feed.entry[i].title["$t"]; }
              var video_id = info.feed.entry[i].media$group.yt$videoid.$t;
              //var Duration = info.feed.entry[i].media$group.media$content[0].duration;
              var imgsrc = info.feed.entry[i].media$group.media$thumbnail[2].url;
              var d = document.createElement("div");
              d.style.width="265px";
              d.style.height="200px";
              d.style.borderTop='2px dashed #c1c1c1';
              if(i == 2) { d.style.borderBottom='2px dashed #c1c1c1'; }
              d.style.padding='10px';
              d.innerHTML = '<a href="https://www.youtube.com/watch?v='+video_id+'"><img style="padding-bottom: 10px;" width="100%" height="180" src="'+imgsrc+'"/></a>';
              d.innerHTML += '<br/><a href="https://www.youtube.com/watch?v='+video_id+'"><b>'+T.replace("LIBERA DIRETTA", "")+'</b></a>';
              d.style.textAlign="center";
              document.getElementById("ldnews").appendChild(d);
              d.style.margin="auto";
            };
          </script>
        </div>
      </div>

    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
