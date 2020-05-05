<?php
/*
* Condicionais
* if
* else
* elseif
*/

echo "<hr>";

$numero = 5;

if($numero == 10):
    echo "é 10 memo <br>";
elseif($numero == 13):
    echo "é 13 memo <br>";
elseif($numero > 5):
    echo "é maior que 5 <br>";
else:
    echo "Isso ai n é nada n";
endif;

echo "<hr>";

// Operador ternário
$media = 3;

echo ($media >= 7) ? "Aprovado!" : "Reprovado";
    // ? --> if
    // : --> else

echo "<hr>";

/*
* switch
* case
*/

$cor = "azula";

switch($cor):
    case "vermelho":
        echo "Sua cor é vermelho";
    break;      // sem esse break, ele ia dar o echo de baixo até achar outro break

    case "verde":
        echo "Sua cor é verde";
    break;      // sem nenhum break o código ia executar os três echo

    case "azul":
        echo "Sua cor é azul";
    break;

    default:    // se não cair em nenhum dos case vai mostrar isso
        echo "Sua cor não é vermelho, nem verde e nem azul.";
endswitch;
?>