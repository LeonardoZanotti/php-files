<?php
echo "<hr>";

// superglobal $_POST --> método post
$nome = $_POST['nome'];     // pega o nome do input
$email = $_POST['email'];   // pega o email do input

echo "Seu nome é $nome e seu email é $email <br>";

var_dump($_POST);

echo "<hr>";

// superglobal $_GET --> método get
$nome = $_GET['nome'];     // pega o nome do input
$email = $_GET['email'];   // pega o email do input

echo "Seu nome é $nome e seu email é $email <br>";

var_dump($_GET);

echo "<br>";

echo $_GET['idade']. "<br>" .$_GET['sobrenome'];
var_dump($_GET);
?>