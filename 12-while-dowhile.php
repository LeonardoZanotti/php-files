<?php
echo "<hr>";

// while
$contador = 1;

while($contador <= 10):         // primeiro verifica a condição e então executa o código
    echo "Contador: $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

// while alternativo
$contador = 1;

while($contador <= 10) {      // primeiro verifica a condição e então executa o código
    echo "Contador: $contador <br>";
    $contador++;
}   

echo "<hr>";

//do while
$contador = 1;

do {                    // primeiro executa a ação e depois verifica a condição
    echo "Contador: $contador <br>";
    $contador++;
} while ($contador <= 10);
?>