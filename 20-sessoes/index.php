<?php
echo "<hr>";

session_start();    // inicia a sessão

$_SESSION['cor'] = "Verde";     // cria a sessão cor na superglobal
$_SESSION['fruta'] = "Uva";

echo $_SESSION['cor']. "<br>" .$_SESSION['fruta']. "<br>" .session_id();    // exibe as sessões e o id da sessão
?>