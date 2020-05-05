<?php
// incluir ou requerir dados de um arquivo php em execução
include "./header.php";
include_once "./header.php";    // não vai incluir
echo "Coé rapaziada";
require "./footer.php";    
require_once "./footer.php";    // não vai incluir

// o include e o require tem a mesma função, de inserir dados em outro arquivo php
// a diferença é que no require, se ele n conseguir localizar o arquivo, ou der qualquer erro na
// inserção de dados ele para o script e dá erro fatal
// o include continua executando o script mesmo com erro, apenas mostra um aviso

// include
// include_once
// require
// require_once

// usar o _once faz ele verificar se o arquivo já foi incluído, daí ele só insere uma vez
?>