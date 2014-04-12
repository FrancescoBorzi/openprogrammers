<center>
<?php
    echo "<p>Invio dell'e-mail a Francesco in corso...</p>";

    $check1 = mail("borzifrancesco@gmail.com", $_GET['oggetto'], $_GET['messaggio']."\n Mittente:".$_GET['dati'], "From: ".$_GET['email']);

    if ($check1)
      echo "<p>E-mail inviata correttamente a Francesco.</p>";
    else
      echo "<p>Errore nell'invio dell'email a Francesco.</p>";

    echo "<p>Invio dell'e-mail a Stefano in corso...</p>";

    $check2 = mail("stefanoborzi32@gmail.com", $_GET['oggetto'], $_GET['messaggio']."\n Mittente:".$_GET['dati'], "From: ".$_GET['email']);

    if ($check2)
      echo "<p>E-mail inviata correttamente a Stefano.</p>";
    else
      echo "<p>Errore nell'invio dell'email a Stefano.</p>";
?>
</center>
<script type="text/javascript">setTimeout("location.href='http://openprogrammers.it';", 2000);</script>
