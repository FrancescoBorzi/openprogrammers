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
            <li class="active"><a href="webdesign.php">WebDesign</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <?php include_once("links.php") ?>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content">
      <div class="row">
        <div class="col-sm-12">
          <h1>Realizzazione Siti Web</h1>
          <p class="h4">Realizziamo siti web per privati, società e aziende. Visita il nostro <a href="portfolio.php">portfolio</a> per visualizzare alcuni dei siti che abbiamo realizzato.</p>
          <a class="btn btn-primary btn-lg" role="button" href="portfolio.php">Portfolio »</a>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-6 text-justify animation">
          <h2><img src="images/HTML5.png" alt="HTML5"> Standard HTML5 & CSS3 <img src="images/CSS3.jpg" alt="CSS3"></h2>
          <p>Per noi è importante che le pagine web siano conformi agli standard di <strong>HTML5</strong> e <strong>CSS3</strong>, per sfruttare a pieno le ultime tecnologie che il web mette a disposizione e garantire la massima compatibilità con tutte le versioni più aggiornate dei browsers più diffusi.</p>
          <p>Ci impegnamo affinchè la struttura del nostro codice segua degli <a href="http://mdo.github.io/code-guide/">standard</a> precisi che aiutino a migliorare la leggibilità, l'ordine e quindi anche il mantenimento dello stesso codice.</p>
        </div>
        <div class="col-md-6 text-right animation">
          <h2><span class="glyphicon glyphicon glyphicon-euro"></span> Perchè non abbiamo un listino prezzi?</h2>
          <p>Il carico di lavoro necessario alla realizzazione di un sito web può variare molto in base alla sua tipologia.</p>
          <p>Per questo motivo non abbiamo prezzi fissi, ma preferiamo ascoltare prima il cliente per capire quali sono le sue esigenze e riuscire a stimare bene il costo del sito internet che dobbiamo realizzare.</p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6 text-justify animation">
          <h2><img src="images/bootstrap-icon.png" alt="Bootstrap"> Responsive Web Design</h2>
          <p>Grazie al front-end framework <a href="http://getbootstrap.com/">Bootstrap</a> è possibile realizzare siti web totalmente responsive.</p>
          <p>Le pagine di un sito responsive sono progettate in modo da far adattare automaticamente il layout per fornire una visualizzazione ottimale in funzione dell'ambiente nel quale vengono visualizzate (desktop, tablet, smartphone, etc...) e della dimensione corrente della finestra del browser.</p>
        </div>
        <div class="col-md-6 text-right animation">
          <h2><span class="glyphicon glyphicon glyphicon-pencil"></span> Come richiedere un preventivo?</h2>
          <p>Puoi <a href="contatti.php">contattarci</a> per descriverci il sito web di cui hai bisogno ed ottenere un preventivo gratuito. Puoi spedirci immagini, schizzi oppure alcuni esempi di siti internet già esistenti per mostrarci l'idea di sito web che desideri.</p>
          <p>In alternativa, se non sai ancora le idee chiare sulla tipologia di sito internet da realizzare, contattaci e ti aiuteremo a capire qual è sito internet che maggiormente corrisponde alle tue esigenze.</p>
        </div>
      </div>

    </div><!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
