<?php
/*
* Operadores aritiméticos
*
* São muito usados com valores numéricos para executar operações aritméticas comuns, como adição,
* subtração, multiplicação, etc.
*
* Adição (+)
* Subtração (-)
* Multiplicação (*)
* Divisão (/)
* Módulo (%)
* Exponenciação (**)
*/
echo "<hr>";

$a = 10;
$b = 5;
$c = 4;
$d = 2;

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a % $c;
echo "<br>";
echo $a ** $d;
echo "<br>";
echo ($a + $b + $c + $d) / 4;   // média

echo "<hr>";


/*
* Operadores de incremento e decremento
*
* Servem para somar ou subtrair (+1 e -1) em qualquer valor do tipo numérico ou string
*/

// pré-incremento
$valor = 20;
echo ++$valor;      // adiciona 1 e depois mostra o valor
echo "<br>";
echo $valor += 1;
echo "<br>";
echo $valor = $valor + 1;
echo "<br>";
echo $valor -= -1;

echo "<hr>";

// pós-incremento
$valor = 20;
echo $valor++;  // mostra o valor e depois soma 1
echo "<br>";
echo $valor;

echo "<hr>";

// pré-decremento
$valor = 20;
echo --$valor;      // tira 1 e depois mostra o valor
echo "<br>";
echo $valor -= 1;
echo "<br>";
echo $valor = $valor - 1;
echo "<br>";
echo $valor += -1;

echo "<hr>";

// pós-decremento
$valor = 20;
echo $valor--;  // mostra o valor e depois tira 1
echo "<br>";
echo $valor;

echo "<hr>";


/*
*   Operadores de atribuição
*/

echo $a = 10;
echo "<br>";
echo $b = 10 + 5;
echo "<br>";
echo $a = $a + $b;
echo "<br>";
echo $c = 5;
echo "<br>";
echo $c += $a;
echo "<br>";
echo $b -= $a;
echo "<br>";
echo $c *= $a;  // $c * $a
echo "<br>";
echo $c /= $a;  // $c / $a
echo "<br>";
echo $c %= $a;  // $c % $a
echo "<br>";
echo $b **= $c; // $b ** $c

echo "<hr>";


/*
* Operadores de comparação
* ==    igual               a diferença de == pra === é que == não considera se e string, int nem nada
* !=    não igual           === considera, sendo que 10 !=== "10" mas 10 == "10"
* ===   idêntico
* !==  não idêntico
* <>    diferente
* <     menor que
* >     maior que
* <=    menor igual que
* >=    maior igual que
* <=>   
*/

if(10 == 10):       // se 10 for igual a 10
    echo "1Positivo <br>";
else:
    echo "1Negativo <br>";
endif;

echo "<br>";

if(10 == "10"):     // se int 10 for igual a 10 string
    echo "2Positivo <br>";
else:
    echo "2Negativo <br>";
endif;

echo "<br>";

if(10 != 10):       // n for igual     
    echo "3Positivo <br>";
else:
    echo "3Negativo <br>";
endif;

echo "<br>";

if(10 === 10):      // 10 é idêntico a 10
    echo "4Positivo <br>";
else:
    echo "4Negativo <br>";
endif;

echo "<br>";

if(10 === "10"):    // 10 int não é idêntico a 10 string
    echo "5Positivo <br>";
else:
    echo "5Negativo <br>";
endif;

echo "<br>";

if(10 !== "10"):    // 10 int não é idêntico a 10 string
    echo "6Positivo <br>";
else:
    echo "6Negativo <br>";
endif;

echo "<br>";

if(10 <> "10"):    // sinal de diferente também não considera o tipo da variável
    echo "7Positivo <br>";
else:
    echo "7Negativo <br>";
endif;

echo "<br>";

if(10 < "11"):    // sinal de menor que também não considera o tipo da variável
    echo "8Positivo <br>";
else:
    echo "8Negativo <br>";
endif;

echo "<br>";

if(10 > "9"):    // sinal de maior que também não considera o tipo da variável
    echo "9Positivo <br>";
else:
    echo "9Negativo <br>";
endif;

echo "<br>";

if(10 <= "11"):    // sinal de menor igual que também não considera o tipo da variável
    echo "10Positivo <br>";
else:
    echo "10Negativo <br>";
endif;

echo "<br>";

if(10 >= "9"):    // sinal de maior igual que também não considera o tipo da variável
    echo "11Positivo <br>";
else:
    echo "11Negativo <br>";
endif;

echo "<br>";

echo 20 <=> 30;     // se o lado direito for maior --> -1
echo "<br>";
echo 20 <=> 20;     // se forem iguais --> 0
echo "<br>";
echo 30 <=> 20;     // se o lado esquerdo for maior --> 1

echo "<hr>";


/*
* Operadores lógicos
*
* Nos permitem fazer comparações entre expressões
* e (&& - and)
* ou (|| - or)
* ou exclusivo (xor)
* negação (!)
*/

$nome = "Zanotti";
$idade = 19;

if(($nome == "Zanotti") && ($idade == 18)):       // atenção para não usar = nos ifs, senão vc vai tar definindo a variável no if e ele vai seguir normal
    echo "1";
elseif(($nome == "Zanotto") and ($idade == 19)):
    echo "2";
else:
    echo "3";
endif;

echo "<br>";

if(($nome == "Zanotti") || ($idade == 18)):       // atenção para não usar = nos ifs, senão vc vai tar definindo a variável no if e ele vai seguir normal
    echo "1";
elseif(($nome == "Zanotto") or ($idade == 19)):
    echo "2";
else:
    echo "3";
endif;

echo "<br>";

if(($nome == "Zanotti") xor ($idade == 18)):       // atenção para não usar = nos ifs, senão vc vai tar definindo a variável no if e ele vai seguir normal
    echo "1";           // se apenas um ou outro for verdadeiro
else:
    echo "2";           // se os dois forem verdadeiros ou se os dois forem falsos
endif;

echo "<br>";

if(!($nome == "Zanotti") && !($idade == 18)):       // atenção para não usar = nos ifs, senão vc vai tar definindo a variável no if e ele vai seguir normal
    echo "1";   // se o nome não for Zanotti e a idade não for 18
elseif(($nome == "Zanotti") and ($idade == 18)):
    echo "2";   // se o nome for Zanotti e a idade for 18
else:
    echo "3";   // o nome é Zanotti e a idade não é 18 ou o nome não é Zanotti e a idade é 18
endif;
?>