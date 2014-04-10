<?php
    echo "Invio dell'e-mail in corso..";
    $check = mail("borzifrancesco@gmail.com", $_GET['oggetto'], $_GET['messaggio']."\n Mittente:".$_GET['dati'], "From: ".$_GET['email']);
    mail("stefanoborzi32@gmail.com", $_GET['oggetto'], $_GET['messaggio']."\n Mittente:".$_GET['dati'], "From: ".$_GET['email']);
    if ($check)
    {
        echo '<br/>E-mail inviata!';
        echo '<script type="text/javascript">alert("E-mail inviata!");</script>';
    }
    else
    {
        echo '<br/>Errore!';
        echo '<script type="text/javascript">alert("Errore durante l\'invio dell\'email!");</script>';
    }
?>
<script type="text/javascript">setTimeout("location.href='http://openprogrammers.it';", 2000);</script>