<?php
// escopo global
$nome = "Leonardo Zanotti";
$a = 1;
$b = 3;
$c = 6;

function exibeNome() {  // escopo local
    global $nome;   //  pega a variável nome do escopo global e define no local
    echo $nome;     // acho que só dá pra tornar uma variável como global através de função
}

exibeNome();

echo "<hr>";

////////////////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "Curitiba";
}

exibeCidade();
echo $cidade;

echo "<hr>";

///////////////////////////

function soma() {
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];     // GLOBALS é um array especial que pode ser usado para pegar as variáveis globais
}

soma();

?>