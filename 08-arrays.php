<?php

// arrays numéricos
echo "<hr>";
$carros = ["BMW", "Ferrari", "Lamburguini", 10 => "Corsa", 50 => "Monza", 666 => "Uninho", "Pálio"];
      // os 3 primeiros carros não tem índice definido, então eles apenas seguem a 
      // ordem 0, 1, 2, já os 3 seguintes tem índices definidos como 10, 50 e 666 respectivamente, 
      // então essa é a posição deles no array, como após o 666 eu não especifiquei o índice, ele segue
      // a contagem a partir do anterior, então o Pálio ocupa a posição 667 do array
print_r($carros);   // mostra o array inteiro

echo "<hr>";

echo $carros[0]. "<br>";
echo $carros[1]. "<br>";
echo $carros[2]. "<br>";
echo $carros[10]. "<br>";
echo $carros[50]. "<br>";
echo $carros[666]. "<br>";
echo $carros[667]. "<br>";

echo "<hr>";

$carros[] = "Brasília";     // inserindo um dado no array --> vai ser posicionado após o último dado
echo $carros[668]. "<br>";      // perceba que o print_r não possui essa informação pois foi 
                                // chamado antes
$carros[4] = "Camaro";      // como aqui está sendo definido a posição em que a informação está sendo
echo $carros[4]. "<br>";   // colocada, então ela fica naquela posição

echo "<hr>";

print_r($carros);   // mostra o array inteiro com as novas inserções

echo "<hr>";

// outros jeitos de definir array numéricos
$comidas = array('Frango', 'Lasanha', 'Sorvete', 'Hambúrguer', 'Batata');
print_r($comidas);
echo "<br>";
echo $comidas[0]. ", " .$comidas[1]. ", " .$comidas[2]. ", " .$comidas[3]. ", " .$comidas[4];

echo "<hr>";

$bebidas = array();     // define como array
$bebidas[] = "Mojito";      // insere dados no array
$bebidas[3] = "Coca Cola";
$bebidas[] = "Água";        // esse aqui vai no índice 4
print_r($bebidas);
echo "<br>";
echo $bebidas[0]. "<br>";
echo $bebidas[3]. "<br>";
echo $bebidas[4]. "<br>";

echo "<hr>";

// contagem de arrays
$totcarros = count($carros);
echo $totcarros;

echo "<br>";

define('TOTCOMIDA', count($comidas));
echo TOTCOMIDA;

echo "<br>";

echo count($bebidas);

echo "<hr>";

// percorrer array
foreach($carros as $carro) {
    echo $carro. "<br>";
};

echo "<hr>";

foreach($comidas as $comida) {
    echo $comida. "<br>";
};

echo "<hr>";

foreach($bebidas as $bebida) {
    echo $bebida. "<br>";
};

echo "<hr>";

// arrays associativos
$pessoa = array('nome' => 'Leonardo', 'idade' => 17, 'altura' => 1.75);
$pessoa['pai'] = 'Reinaldo';    // inserido ao final
print_r($pessoa);

//echo $pessoa[0];      isso não mostra Leonardo

echo "<br>";

foreach($pessoa as $caracteristica) {   // mostra apenas as características
    echo $caracteristica. "<br>";
};

echo "<hr>";

foreach($pessoa as $indice => $valor) { // mostra o "nome" de cada característica
    echo $indice. ": " .$valor. "<br>";
};

echo "<hr>";

// arrays multidimensionais
$times = array(
            'sul' => array('Grêmio', 'Internaconal', 4 => 'Paraná'),
            'sp' => array('Corinthians', 'bom' => 'Santos'),
            'rj' => array('Fluminense', 'Flamengo'),
            'nordeste' => 'Bahia'
        );

echo $times['sul'][0]. "<br>";    // vai pegar o índice 0 do array sul que tá no array times --> Grêmio
echo $times['sul'][4]. "<br>";
echo $times['nordeste']. "<br>";
echo $times['rj'][1]. "<br>";
echo $times['sp']['bom']. "<br>";

echo "<br>";

$times['sp'][] = 'Figueirense';     // Este dado vai adicionado após o último dado numérico, então é o 1
$times['sp'][5] = 'Palmeiras';  // adicionando dados ao array sp que tá dentro do array times
$times['sp'][] = 'São Paulo';   // dado que vai no final só segue a ordem, como a último é 5 esse é 6
$times['sp']['ruim'] = "Cruzeiro";
echo $times['sp'][1]. "<br>";
echo $times['sp'][5]. "<br>";
echo $times['sp'][6]. "<br>";
echo $times['sp']['ruim']. "<br>";

echo "<br>";

foreach($times['sp'] as $tag => $time) {
    echo $tag. ": " .$time. "<br>"; 
};
?>