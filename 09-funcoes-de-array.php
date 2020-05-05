<?php
// Funções de array
/* 
* is_array($array) = verificar se uma variável é um array
* in_array($valor, $array) = verifica se a variável valor está contida no array
* array_keys($array) = retorna um novo array com as chaves (índices) do array sendo passadas como parâmetro
* array_values($array) = retorna um novo array com os valores do array sendo passados como parâmetro
* array_merge($array1, $array2) = junta os dois arrays em um novo
* array_pop($array) = exclui a última posição do array
* array_shift($array) = exclui a primeira posição do array
* array_unshift($array, $valor1, $valor2) = adiciona um ou mais elementos no começo do array
* array_push($array, $valor1, $valor2) = adiciona um ou mais elementos no fim do array
* array_combine($keys, $values) = mescla os dois arrays passados, sendo o primeiro os índices dos valores do segundo array
* array_sum($array) = soma os elementos do array
* explode("/", "20/01/2001") = transforma string em array
* implode("-", $array) = transforma array em string
*/

// is_array
echo "<hr>";
$nomes = array("eu" => "Leonardo", "Fabrício", "deus" => "José", "Ana");
echo is_array($nomes). "<br>";  // 1 = true
var_dump($nomes);
var_dump(is_array($nomes));

if(is_array($nomes)):
    echo "é um array";
else:
    echo "not array";
endif;

echo "<hr>";

// in_array
echo in_array("Leonardo", $nomes);  // 1 = true
echo in_array("Jorginho", $nomes);  // nada = false
echo "<br>";
if(in_array("José", $nomes)):
    echo "tá no array";
else:
    echo "Não tá no array n";
endif;

echo "<hr>";

// array_keys
$keys = array_keys($nomes);
print_r($keys);

echo "<hr>";

// array_values
$values = array_values($nomes);
print_r($values);   // aqui ele pegou apenas os nomes e ignorou os índices, desse modo o "eu" e o "deus" foram ignorados e o novo array é numérico

echo "<hr>";

// array_merge
$carros = array("Camaro", "Corsa", "Uno");
$motos = array("Pop100", "50cc", "cb1000");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);

echo "<hr>";

// array_pop
print_r($carros);
echo "<br>";
echo array_pop($carros);        // mostra o elemento que será excluído
echo "<br>";
print_r($carros);

echo "<hr>";

// array_shift
print_r($carros);
echo "<br>";
echo array_shift($carros);        // mostra o elemento que será excluído
echo "<br>";
print_r($carros);

echo "<hr>";

// array_unshift
$frutas = array("uva", "laranja", "abacaxi");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "tomate", "manga");
print_r($frutas);

echo "<hr>";

// array_unshift
$frutas = array("uva", "laranja", "abacaxi");
print_r($frutas);
echo "<br>";
array_push($frutas, "tomate", "manga");
print_r($frutas);

echo "<hr>";

// array_combine
$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Botafogo", "Flamengo", "Paraná");

$resultado = array_combine($keys, $values);
print_r($resultado);

echo "<hr>";

// array_sum()
$soma = array(4, 5, 7.4, 1.2, 12);
echo array_sum($soma);
$total = array_sum($soma);
echo "<br>" .$total;

echo "<hr>";

// explode
$data = "30/04/2018";
$novaData = explode('/', $data);                 // explode(delimitador, string)
print_r($novaData);     // cada parte da data dividida por "/" foi para um índice do array

echo "<br>";

$frase = "Meu nome é Leonardo";
$novaFrase = explode(" ", $frase);  // vai separar cada palavra da frase que tá separada por um espaço " "
print_r($novaFrase);

echo "<hr>";

// implode
$data = implode("-", $novaData);
echo $data. "<br>";

$frase = implode(" ", $novaFrase);
echo $frase. "<br>";

$nomes = ["Leonardo", "Eduardo", "Zeca", "Gabriel"];
$lista = implode(", ", $nomes);
echo $lista;
echo "<hr>";
?>
