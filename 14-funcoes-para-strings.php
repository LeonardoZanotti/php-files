<?php
/*
* Funções para strings
* strtoupper
* strtolower
* substr
* str_pad
* str_repeat
* strlen
* str_replace
* strpos
*/
echo "<br>";

// strtoupper e strtolower
$nome = "leonardo zanotti";
$nome1 = strtoupper($nome);     // em capslock
$nome2 = strtolower($nome1);    // tudo em low case
echo $nome1. "<br>";
echo $nome2. "<br>";

echo "<hr>";

// substr
$mensagem = "Olá mundo!";       // O, l, a, ´, , são os 5 primeiros caracteres e m, u, n, d, são os 4 seguintes
echo substr($mensagem, 5, 4);  // vai recortar a string da $mensagem tirando os 5 primeiros caracteres 
                               // e pegar os próximos 4
echo "<hr>";

// str_pad
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7);      // vai fazer a string mouse ter 7 caracteres, complementando os 2 que faltam com espaços
$novoObjeto1 = str_pad($objeto, 10, "12345678", STR_PAD_RIGHT);    // coloca 5 caracteres na direita e ignora os que tão a mais (se n especificar o lado ali por padrão vem na direita)
$novoObjeto2 = str_pad($objeto, 10, "123", STR_PAD_LEFT);     // coloca 5 caracteres na esquerda, ent ele repete o 1 e 2
$novoObjeto3 = str_pad($objeto, 10, "*", STR_PAD_BOTH);     // divide os caracteres nos lados, mas se for ímpar vai mais no lado direito

echo $novoObjeto. "<br>";
echo $novoObjeto1. "<br>";
echo $novoObjeto2. "<br>";
echo $novoObjeto3. "<br>";

echo "<hr>";

// str_repeat
$string = str_repeat("Sucesso! <br>", 5);    // repete "Sucesso!" 5 vezes
echo $string;

echo "<hr>";

// strlen
$mensagem = "Olá Mundo!";
echo strlen($mensagem);     // quantos caractéres tem a string --> O, l, a, ´, , M, u, n, d, o, !

echo "<hr>";

// str_replace
$texto = "A Argentina vencerá a copa do mundo de 2022!";
$novotexto = str_replace("A Argentina", "O Brasil", $texto); // substitui a parte "A Argentina" por "O Brasil" na string da variável $texto
echo "$texto <br>";
echo $novotexto;

echo "<hr>";

// strpos
echo strpos($texto, "c");       // mostra a posição do primeiro caracter "c" na string da variável $texto
echo "<br>";
echo strpos($texto, "copa");    // posição da palavra copa
echo "<br>";
echo strpos($texto, "a");       // mostra a posição do primeiro caracter "a" na string da variável $texto
echo "<br>";                    // sim, dá diferença o "A" e "a"
echo strpos($texto, "A");       // mostra a posição do primeiro caracter "A" na string da variável $texto
echo "<br>";                    // sim, dá diferença o "A" e "a"
echo strpos($texto, " ");       // mostra a posição do primeiro caracter " " (espaço) na string da variável $texto
?>