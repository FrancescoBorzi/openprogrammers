<?php
include_once("db_connect.php");
?>
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
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
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
        <div class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.php">Home</a></li>
            <li><a href="chisiamo.php">Chi siamo</a></li>
            <li><a href="webdesign.php">WebDesign</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Software<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Francesco Borzì</li>
                <li><a target="_blank" href="https://github.com/ShinDarth"><img class="hidden-xs" src="images/GitHub-Mark-32px.png" width="20px"> ShinDarth</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Stefano Borzì</li>
                <li><a target="_blank" href="https://github.com/Helias"><img class="hidden-xs" src="images/GitHub-Mark-32px.png" width="20px"> Helias</a></li>
              </ul>
            </li>
            <li><a href="http://shinworld.altervista.org">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">GNU Linux<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Dal nostro blog</li>
                <li><a target="_blank" href="http://shinworld.altervista.org/wordpress/come-formattare-il-proprio-pc-installando-linux/">Come formattare il proprio PC installando Linux</a></li>
                <li><a target="_blank" href="http://shinworld.altervista.org/wordpress/usare-linux-e-veramente-piu-difficile-rispetto-a-windows-8-motivi-dimostrano-il-contrario/">Usare Linux è più difficile rispetto a Windows?</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Dal web</li>
                <li><a target="_blank" href="https://www.gnu.org/">Cosa sono GNU e il Software Libero?</a></li>
                <li><a target="_blank" href="http://wiki.ubuntu-it.org/Sicurezza/Malware">Sicurezza dei sistemi operativi GNU/Linux</a></li>
              </ul>
            </li>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content text-center">

      <?php
$query = "SELECT COUNT(*) FROM quotes";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_row($result);

$rand = rand(1, $row[0]);
$query = sprintf("SELECT quote, author FROM quotes WHERE id = %d", $rand);
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$quote = $row['quote'];
$author = $row['author'];
      ?>

      <div class="row">
        <blockquote class="pull-right">
          <p><?= $quote ?></p>
          <small><?= $author ?></small>
        </blockquote>
      </div>

      <center>
        <div class="carousel owl-carousel hidden-xs">
          <div class="item"><img class="radius" src="images/carousel/1.jpg"></div>
          <div class="item"><img class="radius" src="images/carousel/2.jpg"></div>
          <div class="item"><img class="radius" src="images/carousel/3.jpg"></div>
        </div>
        <div class="carousel owl-carousel visible-xs">
          <div class="item"><img class="radius" src="images/carousel/1.jpg" width="100%"></div>
          <div class="item"><img class="radius" src="images/carousel/2.jpg" width="100%"></div>
          <div class="item"><img class="radius" src="images/carousel/3.jpg" width="100%"></div>
        </div>
      </center>

      <div class="row">
        <div class="col-md-4">
          <h2>Realizzazione Siti Web</h2>
          <p class="text-justify">Realizziamo siti internet di <strong>qualsiasi tipologia</strong>, per aziende, società e privati.</p>
          <p class="text-justify">Adattiamo le pagine web a <strong>tutti i dispositivi</strong>: smartphone, tablet, desktop, etc... garantendo compatibilità, ottimizzazione della grafica e dei contenuti. </p>
          <p><a class="btn btn-info" href="webdesign.php" role="button">Maggiori Informazioni &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Sviluppo Software</h2>
          <h2 class="visible-md" style="margin: 0;">&nbsp;</h2>
          <p class="text-justify">Ci piace sviluppare software, ma ancor di più ci piace sviluppare <strong>software libero</strong> e contribuire ai grandi progetti open source.</p>
          <p class="text-justify">Visita i nostri profili su GitHub:</p>
          <p><a target="_blank" class="btn btn-default" href="https://github.com/ShinDarth" role="button"><img src="images/GitHub-Mark-32px.png" width="20px">&nbsp;Francesco</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" class="btn btn-default" href="https://github.com/Helias" role="button"><img src="images/GitHub-Mark-32px.png" width="20px">&nbsp;Stefano</a></p>
        </div>
        <div class="col-md-4">
          <h2>Vuoi Contattarci?</h2>
          <h2 class="visible-md" style="margin: 0;">&nbsp;</h2>
          <p class="text-justify">Programmare è la nostra passione: qualsiasi siano le tue richieste, saremo felici di ascoltarle per cercare di soddisfare al meglio tutte le tue esigenze.</p>
          <p class="text-justify">Mandaci un email, ti risponderemo nel più breve tempo possibile.</p>
          <p><a class="btn btn-success" href="contatti.php" role="button">Contattaci &raquo;</a></p>
        </div>
      </div>

    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript">
      //carousel
      $(document).ready(function() {
        $(".carousel").owlCarousel({
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true,
          autoPlay: true
        });
      });
    </script>

  </body>
</html>
