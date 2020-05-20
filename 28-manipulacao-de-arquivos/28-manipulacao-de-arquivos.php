<?php
// Manipulação de arquivos
/*
* fopen(arquivo, modo)
* fclose(arquivo)
* fwrite(arquivo, conteúdo)
* !feof(arquivo)       // for end of file
* fgets(arquivo, tamanho do arquivo)
* filesize(arquivo)
*/

$arquivo = './arquivo.txt';
$conteudo = "Conteudo teste\n";
$tamanhoArquivo = filesize($arquivo);
$x = 1;     // contador de linhas no while

$arquivoAberto = fopen($arquivo, 'a+');

while(!feof($arquivoAberto)) {    // !feof() = se não for o final do arquivo
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo "linha $x: " .$linha. "<br>";
    $x++;
}

// por algum motivo se vc deixar isso aqui antes do while ele buga o site, deve ser pra evitar loop
fwrite($arquivoAberto, $conteudo);

fclose($arquivoAberto);

// letras para definir o mode do fopen:
/*
‘r’ Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.

‘r+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.

‘w’ Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e 
reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘w+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo 
e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.

‘a’ Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se 
o arquivo não existir, tenta criá-lo.

‘a+’ Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se 
o arquivo não existir, tenta criá-lo.

‘x’ Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. 
Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro 
de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.

‘x+’ Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. 
Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro 
de nível E_WARNING. Se o arquivo não existir, tenta criá-lo.
*/