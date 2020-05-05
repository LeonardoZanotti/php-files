<?php
/*
* Funções para números
*
* number_format
* round
* ceil
* floor
* rand
*/
echo "<hr>";

// number_format
$number = 12345.678;
$preco = number_format($number, 2, ",", ".");
// formata o number com 2 casas decimais, usa vírgula nos decimais e ponto nos milhares
echo "O valor do produto é R$ $preco <br>";    // ele arredonda as casas decimais

echo "<hr>";

// round --> arredonda valores pros dois lados
echo round(3.5). "<br>";
echo round(3.49). "<br>";
echo round(3.51). "<br>";
echo round(45). "<br>";

echo "<hr>";

// ceil --> arredonda pra cima
echo ceil(3.5). "<br>";
echo ceil(3.49). "<br>";
echo ceil(3.51). "<br>";
echo ceil(45). "<br>";

echo "<hr>";

// floor --> arredonda pra baixo
echo floor(3.5). "<br>";
echo floor(3.49). "<br>";
echo floor(3.51). "<br>";
echo floor(45). "<br>";

echo "<hr>";

// rand --> sorteia valor aleatórios entre as duas faixas
echo rand(0, 2);    // 0, 1 ou 2
?>