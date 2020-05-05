<?php
echo "<hr>";
session_start();
echo $_SESSION['cor']. "<br>" .$_SESSION['fruta']. "<br>" .session_id();
// home.php n vai criar nenhuma sessão, apenas exibir a existente
// então a ideia é vc entrar pelo index, criar a sessão que vai ser exibida lá primeiro
// daí vc pode vir pro home que vai poder mostrar tudo que já ta guardado na superglobal
// se vc vir de cara aqui no home vai dar erro pois a sessão n vai tar criada
?>