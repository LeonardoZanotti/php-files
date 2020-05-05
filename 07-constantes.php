<?php
// constantes   --> são globais!
define('NOME', 'Zanottinho');       // define a constante nome como 'Zanottinho'
define('IDADE', 17);        // por convenção as constantes são definidas com letras maiúsculas
define('ALTURA', 1.75);
define('CASADO', false);

var_dump(NOME);
echo NOME;
var_dump(IDADE);
echo IDADE;
var_dump(ALTURA);
echo ALTURA;
var_dump(CASADO);
echo CASADO;

echo "<hr>";

echo "Meu nome é " .NOME. " tenho " .IDADE. " anos e " .ALTURA. " de altura.";

echo "<hr>";

define('TIMES', ['Vasco', 'Internacional', 'Grêmio', 'Santos']);
echo TIMES[0]. "<br>";
echo TIMES[1]. "<br>";
echo TIMES[2]. "<br>";
echo TIMES[3]. "<br>";
var_dump(TIMES);

echo "<hr>";

function exibeNome() {
    echo NOME;      // como as constantes são globais, vc pode 
}                  // usar assim sem antes definir ela como global e funciona


exibeNome();
?>