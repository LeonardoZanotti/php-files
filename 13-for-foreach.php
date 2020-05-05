<?php
echo "<hr>";

// for
for($contador = 0; $contador <= 10; $contador++):
    echo "Contador: $contador <br>";
endfor;

echo "<hr>";

// for alternativo
for($contador = 0; $contador <= 10; $contador++) {
    echo "Contador: $contador <br>";
}

echo "<hr>";

// tabuadas
for($a = 1; $a <= 10; $a++) {
    for($b = 1; $b <= 10; $b++) {
        echo "$a X $b = " .($a*$b). "<br>";
    }
    echo "<br>";
}

echo "<hr>";

// foreach
$cores = ["Cor preferida da Ana" => "Verde", "Cor preferida da Laura" => "Azul", 4 => "Amarelo", "Vermelho"];

foreach($cores as $indice => $valor) {
    echo "$indice: $valor <br>";
}

echo "<hr>";

// foreach alternativo
$cores = ["Cor preferida da Ana" => "Verde", "Cor preferida da Laura" => "Azul", 4 => "Amarelo", "Vermelho"];

foreach($cores as $indice => $valor):
    echo "$indice: $valor <br>";
endforeach;
?>