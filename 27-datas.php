<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d');     // dia numérico
echo "<br>";
echo date('D');     // dia da semana com três caracteres
echo "<br>";
echo date('m');     // mês numérico
echo "<br>";
echo date('M');     // mês em texto com três caracteres
echo "<br>";
echo date('y');     // ano com dois dígitos
echo "<br>";
echo date('Y');     // ano com quatro dígitos 
echo "<br>";
echo date('d/m/y');
echo "<br>";
echo date('D/M/Y');
echo "<br>";
echo date('d/D/m/M/y/Y');
echo "<br>";
echo date('l');      // dia da semana inteiro em texto
echo "<br>";
echo date('L');     // dia da semana em número de um a sete
echo "<br>";
echo date('h:i:s');      // hora no formato de 12h
echo "<br>";
echo date('H:i:s');      // hora no formato de 24h
echo "<br>";
echo date('d/m/y h:i:s A');
echo "<br>";

// Armazenar data no banco de dados
$date = date('Y-m-d');  // armazenar no modelo estadunidensse
echo $date. '<br>';
$datetime = date('Y-m-d H:i:s');  // armazenar no modelo estadunidensse
echo $datetime. '<br>';

/////
echo time();    // quantos segundos se passaram desde 1970
$time = time();
echo '<br>';

echo date('d/m/Y', $time);  // isso aqui é a função padrão
echo " = ";
echo date('d/m/Y', time());  // isso aqui é a função padrão
echo " = ";
echo date('d/m/Y');  // isso aqui é a função padrão

// a função date() basicamente conta quanto tempo se passou desde as 21h de 31/12/1969
// se vc adicionar uma variável depois ou um valor de segundos ela conta esse tempo na data
// e mostra qual data se refereria ao tempo que passou
/////

echo '<br>';
$time1 = '145612378';   // tempo em segundos
$time2 = '10800';   // tempo em segundos
$time3 = '10799';   // tempo em segundos
$time4 = '0';   // tempo em segundos
echo date('d/m/Y H:i:s', $time1);     // 21h de 31/12/1969 + 14512378 segundos 
echo '<br>';
echo date('d/m/Y', $time2);     // 21h de 31/12/1969 + 10800 segundos (3h)
echo '<br>';
echo date('d/m/Y', $time3);     // 21h de 31/12/1969 + 10799 segundos (3h - 1 segundo)
echo '<br>';
echo date('d/m/Y H:i:s', $time4);     // 21h de 31/12/1969 + 0 segundos
echo '<br>';

// mktime(hora, minutos, segundos, mês, dia, ano)
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/Y - h:i', $data_pagamento);
echo '<br>';
$data_pagamento = mktime(15, 90, 60, 15, 02, 2023);
echo date('d/m/Y - h:i', $data_pagamento);
echo '<br>';

$data = '2019-04-10 14:55:13';
$data = strtotime($data);
echo $data;     // segundos
echo '<br>';
echo date('d/m/Y - h:i:s A', $data);
echo '<br>';
