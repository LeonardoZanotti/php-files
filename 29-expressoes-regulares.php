<?php
// Expressões regulares
// Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras
// ^ início da expressão, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres
// {} ocorrências - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/     --> email
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/     --> data

$string = "abc";
$padrao = "/^[a-z][a-z][a-z]$/";

// exemplos de padrão válidos para string = "abc":
// /^abc$/
// /^a/             // basicamente ^ mostra o início da string
// /c$/             // e $ mostra o final dela
// /b/
// /^[a-z][a-z][a-z]$/

// exemplo inválido para string = "abc":
// /^b$/
// /^[a-z]$/        --> cada [a-z] valida apenas uma letra

if(preg_match($padrao, $string)) {
    echo "Válido!";
    echo "<br>";
    echo $string;
} else {
    echo "Inválido!";
    echo "<br>";
}

// -------------------------------- //
echo "<hr>";

$string = "aQ1";
$padrao = "/^[a-z0-9]*$/i";


// exemplos de padrão válidos para string = "aQ1":
// /^[a-z0-9][a-z0-9][a-z0-9]$/i    --> /i ativa case sensitive
// /^[a-z0-9]{1,4}$/i    --> verifica até 4 caracteres com o parâmetro [a-z0-9]
// /^[a-z0-9]*$/i       // * é o mesmo que {0,}, ou seja, verifica 0 ocorrências ou várias
                        // ocorrências (não tem número fixo de verificação)
// /^[a-z0-9]+$/i       // + é o mesmo que {1,}, ou seja, verifica 1 ocorrência ou mais

// exemplo inválido para string = "aQ1":
// /^[a-z0-9]{4}$/      // valida exatamente 4 caracteres --> só tem 3, além de n ter case sensitive
// /^[a-z0-9]?$/i       // ? é o mesmo que {0,1} 


if(preg_match($padrao, $string)) {
    echo "Válido!";
    echo "<br>";
    echo $string;
} else {
    echo "Inválido!";
    echo "<br>";
}

// -------------------------------- //
echo "<hr>";

// Validação de email
$string = "leonardojosezanotti@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/";

// verificação da parte antes do @
// [a-z0-9.\-\_]+
// permite a-z, 0-9, ., - e _
// as \ é pra separar os .-_
// + para identificar 1 ou mais ocorrências

// verificação da parte entre o @ e o .
// @[a-z0-9-\_]+
// @ pra indificar o @ do email
// permite a-z, 0-9, - e _
// + pra indicar 1 ou mais ocorrências

// verificação da parte depois do ponto
// \.(com|br|com.br|net)
// \. indica o . que tem no email mesmo, \ diz pra ler o próximo termo como string
// depois do ponto pode ter um dos sufixos que tem dentro do parênteses separado por |

if(preg_match($padrao, $string)) {
    echo "Válido!";
    echo "<br>";
    echo $string;
} else {
    echo "Inválido!";
    echo "<br>";
}

// Exemplo
// $string1 = "leonardojosezanotti@gmail.org.com";
// $string2 = "leonardojosezanotti@gmail.orgcom";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/";
// string1 é válida, mas a 2 não de acordo com o padrao

// -------------------------------- //
echo "<hr>";

// Validação de data
$string = "13/09/2019";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

// [0-9]{2} --> dia
// [0-9]{2} --> mês
// [0-9]{4} --> ano
// \/   --> separador da data, \ diz pra ler o próximo termo como string

// apesar disso, 44/44/9999 é válido segundo essa validação

if(preg_match($padrao, $string)) {
    echo "Válido!";
    echo "<br>";
    echo $string;
} else {
    echo "Inválido!";
    echo "<br>";
}