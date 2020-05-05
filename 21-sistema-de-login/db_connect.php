<?php
// Conexão com banco de dados
$servername = "localhost";      // server onde a gente acessa o banco
$username = "root";     // login do banco de dados
$password = "";     // senha do banco de dados
$db_name = "sistemalogin";   // nome do banco de dados que foi criado

// mysqli tem suporte a programação procedural e POO
$connect = mysqli_connect($servername, $username, $password, $db_name); // função para realizar a conexão com o banco de dados passando os parâmetros necessários

if(mysqli_connect_error()) {
    echo "Falha na conexão: " .mysqli_connect_error();
}
?>