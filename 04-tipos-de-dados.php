<?php
// Dados escalares
// string
$nome = "Leonardo";

var_dump($nome);    // mostra informações da variável

if(is_string($nome)):
    echo "É string";
else:
    echo "Não é string";
endif;

echo "<hr>";

// int
$idade = 18;

var_dump($idade);    // mostra informações da variável

if(is_int($idade)):
    echo "É int";
else:
    echo "Not a int";
endif;

echo "<hr>";

// float
$altura = 1.78;

var_dump($altura);    // mostra informações da variável

if(is_float($altura)):
    echo "É float";
else:
    echo "É float n";
endif;

echo "<hr>";

// boolean
$admin = false;     // true

var_dump($admin);    // mostra informações da variável

if(is_bool($admin)):
    echo "É boleano";
else:
    echo "Né não";
endif;

echo "<hr>";
echo "<hr>";

// Dados compostos
// array
$carros = array("Gol", "Uninho", "Pálio", "Corsinha", 10, 15.5, true);

var_dump($carros);

echo $carros[3];
echo "<br>";

if(is_array($carros)):
    echo "É array";
else:
    echo "Né array não";
endif;

echo "<hr>";

// object
class Client {
    public $nome;
    public function atribuirNome($nome) {
        $this -> $nome = $nome; 
    }
}

$client = new Client();
$client -> atribuirNome("Leonardo");
var_dump($client);

if(is_object($client)):
    echo "É objeto";
else:
    echo "Né objeto não";
endif;

echo "<hr>";

// null
$cidade = null;
var_dump($cidade);
if(is_null($cidade)):
    echo "É null";
else:
    echo "N é null";
endif;

echo "<hr>";

// resources (?)

/*
gettype() - Retorna o tipo da variável.
var_dump() – Retorna o tipo e o valor.

is_int() – Verifica se a variável em questão é do tipo integer.
is_bool() – Verifica se a variável em questão é do tipo boolean.
is_numeric() – Verifica se a variável em questão é uma string numérica, ex "100".
is_string() – Verifica se a variável em questão é do tipo string.
is_float() – Verifica se a variável em questão é do tipo flutuante.
is_array() – Verifica se a variável em questão é do tipo Array.
is_object() – Verifica se a variável em questão é do tipo objeto.
*/
?>


