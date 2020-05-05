<?php
$nome = 'Leonardo';
$idade = 23;
$altura = 1.75;

echo "Meu nome é $nome, tenho $idade anos e minha altura é \"1.75\" <br>";       // \' ou \" é pra ele ignorar aquelas aspas e considerar como string mesmo
echo 'Meu nome é $nome, tenho \'23\' anos e minha altura é $altura <br>';        // perceba a coloração também
echo 'Meu nome é ' .$nome. ', tenho ' .$idade. ' anos e minha altura é ' .$altura;  // repare o uso dos ".", se tiver mais texto depois da variável tem de se usar antes e depois dela
?>