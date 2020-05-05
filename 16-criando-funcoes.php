<?php
// Criando Funções
echo "<hr>";

$name = "Leonardo";

function exibirNome($nome) {
    echo "Meu nome é $nome";
}

exibirNome($name);

echo "<hr>";


$name = "Leonardo Zanotti";
$nota1 = 5.5;
$nota2 = 0.7;
$nota3 = 9;
$nota4 = 10;

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    
    if($media >= 7) {
        $resultado = "aprovado!";
    }
    else {
        $resultado = "reprovado.";
    }

    echo "$nome teve média $media e está $resultado";
}

calcularMedia($name, $nota1, $nota2, $nota3, $nota4);
?>
