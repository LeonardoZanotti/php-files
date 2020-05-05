<?php
/* Superglobais --> variáveis pré-definidas do php
*
* $GLOBALS
* $_SERVER
* $_REQUEST
* $_POST
* $_GET
* $_FILES
* $_ENV
* $_COOKIE
* $_SESSION
*/

echo "<hr>";

// $GLOBALS --> acessar variáveis globais --> é um array que armazena todas as variáveis globais
$x = 10;
$y = 15;

function soma() {
    // echo $x + $y;    --> não funciona, pois estamos no escobo local onde estas variáveis não estão definidas
    echo $GLOBALS['x'] + $GLOBALS['y'];
    // pega o valor dos índices 'x' e 'y' no array
}

soma();

echo "<hr>";

// $_SERVER --> possui informações sobre cabeçalhos, caminhos e locais de scripts --> array com vários índices
echo $_SERVER['PHP_SELF']. "<br>";  // o índice 'PHP_SELF' referência o nome do arquivo que está sendo executado no array _SERVER
echo $_SERVER['SERVER_NAME']. "<br>"; // o índice 'SERVER_NAME' referência o nome do host no array _SERVER
echo $_SERVER['SCRIPT_FILENAME']. "<br>"; // o índice 'SCRIPT_FILENAME' referência o caminho ao arquivo que está sendo usado no array _SERVER
echo $_SERVER['DOCUMENT_ROOT']. "<br>"; // o índice 'DOCUMENT_ROOT' referência o diretório raíz no array _SERVER
echo $_SERVER['SERVER_PORT']. "<br>"; // o índice 'SERVER_PORT' referência a porta que está sendo usada no array _SERVER
echo $_SERVER['REMOTE_ADDR']. "<br>"; // o índice 'REMOTE_ADDR' retorna o endereço de ip do usuário que está visualizando a página no array _SERVER

// se quiser saber mais índices é só pesquisar no manual do php -->
// pesquisa no google "$_SERVER php manual"

echo "<hr>";


?>