<html>
<body>

<?php 
/*
* Validações    --> Valida os dados do input
* Função filter_Input
* FILTER_VALIDADE_INT
* FILTER_VALIDATE_EMAIL
* FILTER_VALIDATE_FLOAT
* FILTER_VALIDATE_IP
* FILTER_VALIDATE_URL
-> Se quiser conhecer mais filtros pesquisa "filters validate" e vai na documentação do php

* Sanitização   --> retorna true ou false se os dados estiverem corretos --> limpar as variáveis
* Funções filter_input e filter_var
* FILTER_SANITIZE_SPECIAL_CHARS
* FILTER_SANITIZE_NUMBER_INT
* FILTER_SANITIZE_EMAIL
* FILTER_SANITIZE_URL
-> Se quiser conhecer mais filtros pesquisa "filters sanitize" e vai na documentação do php
*/
?>


<!-- Usando o método POST, os dados são passados sem o usuário poder ver -->
<form action = "dados.php" method = "POST">     <!-- usa o método POST e envia os dados do formulário para o dados.php -->
Nome: <input type = "text" name = "nome"> <br> <br>     <!-- name é o parâmetro que se passa -->
Email: <input type = "email" name = "email"> <br> <br>
<!-- <input type = "submit" name = "enviar"> -> Isso aqui apareceria no POST pois também é input, mas funciona -->
<button type = "submit"> Enviar </button>
</form>


<br>


<!-- Usando o método GET, os dados são passados como parâmetros na url (?nome=xxx por exemplo), de modo que o usuário pode ver -->
<form action = "dados.php" method = "GET">     <!-- usa o método GET e envia os dados do formulário para o dados.php -->
Nome: <input type = "text" name = "nome"> <br> <br>     <!-- name é o parâmetro que se passa -->
Email: <input type = "email" name = "email"> <br> <br>
<!-- <input type = "submit" name = "enviar"> -> Isso aqui apareceria no GET pois também é input, mas funciona -->
<button type = "submit"> Enviar </button>
</form>


<br>


<!-- Com o método GET podemos só enviar um link com os dados -->
<a href = "dados.php?idade=18&sobrenome=Jose">Enviar dados</a>


<br>
<br>
<hr>


<!-- Validate -->
<?php
if(isset($_POST['enviar-formulario'])) {    // se estiver setado na superglobal post o índice enviar-formulário --> se alguem tiver clicado no botão de enviar
    //var_dump($_POST);
    $erros = array();   // array de erros

    // Validações
    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {   // se não der boa definir $idade, filtrando o input no método post com name 'idade' e filtrando o valor do input pra ser apenas int
        $erros[] = "Idade deve ser um número inteiro!"; // array erros guarda uma mensagem de erro
    }
    
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {   // se não der boa definir $email, filtrando o input no método post com name 'email' e filtrando o valor do input pra ser apenas email
        $erros[] = "Informe um email válido!"; // array erros guarda uma mensagem de erro
    }
    
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {   // se não der boa definir $peso, filtrando o input no método post com name 'peso' e filtrando o valor do input pra ser apenas float
        $erros[] = "Informe um peso válido! (90.5 por exemplo)"; // array erros guarda uma mensagem de erro
    }
    
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {   // se não der boa definir $ip, filtrando o input no método post com name 'ip' e filtrando o valor do input pra ser apenas ip
        $erros[] = "Informe um endereço de IP válido!"; // array erros guarda uma mensagem de erro
    }
    
    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {   // se não der boa definir $url, filtrando o input no método post com name 'url' e filtrando o valor do input pra ser apenas url
        $erros[] = "Informe uma URL válida!"; // array erros guarda uma mensagem de erro
    }

    // Verificando se há erros
    if(!empty($erros)) {    // se o array erros não estiver vazio
        foreach($erros as $erro) {  // para cada erro dentro do array
            echo "<li>$erro</li>";      // mostra o erro numa lista
        }
    } else {
        echo "Dados enviados.";
    }
}

?>

<!-- Usando o método POST, os dados são passados sem o usuário poder ver -->
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">     <!-- usa o método POST e envia os dados do formulário para este mesmo arquivo -->
Idade: <input type = "text" name = "idade"> <br> <br>     <!-- name é o parâmetro que se passa -->
Email: <input type = "text" name = "email"> <br> <br>
Peso: <input type = "text" name = "peso"> <br> <br>
IP: <input type = "text" name = "ip"> <br> <br>
URL: <input type = "text" name = "url"> <br> <br>
<!-- <input type = "submit" name = "enviar"> -> Isso aqui apareceria no POST pois também é input, mas funciona -->
<button type = "submit" name = "enviar-formulario"> Enviar </button>
</form>


<br>
<hr>


<!-- Sanitize -->
<?php
if(isset($_POST['enviar-formulario2'])) {    // se estiver setado na superglobal post o índice enviar-formulário2 --> se alguem tiver clicado no botão de enviar
    //var_dump($_POST);
    $erros2 = array();   // array de erros
    
    // Sanitização
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);    // filtra caracteres especiais, desse modo quebra uns code
        // echo $nome. "<br>";     // aqui se verifica a importância do filtro de caracteres especiais
        // echo $_POST['nome']. "<br>";  // aqui sem o filtro de html e tals vc pode inserir um botãao na página, pense nas possiblidades hackers disso
        // teste o nome com "<button> Olá Mundo! </button>"

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);     // filtra tudo deixando apenas números inteiros, então se vc mandar um $@#$4!@#!@3asdas ele vai entender como 43
        // echo $idade. "<br>";     --> como são inteiros, +4 e -4 aparecerão com os sinais se forem colocados assim
        if(!filter_var($idade, FILTER_VALIDATE_INT)) {  // juntando o sanitize com o validate, desse modo se a idade limpa não for inteiro
            $erros2[] = "Idade precisa ser um inteiro!";    // array de erros recebe uma mensagem de erro
        }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);  // remove /, (), <>, deixando apenas letras a alguns caracteres especiais
        echo $email. "<br>";
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {  // juntando o sanitize com o validate, desse modo se o email limpo não for válido
            $erros2[] = "Informe um email válido!";    // array de erros recebe uma mensagem de erro
        }

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);    // remove espaços e símbolos Alt Gr da URL --> só isso aq ainda permite vc fazer um botão com o <button>
        // echo $url. "<br>";
        if(!filter_var($url, FILTER_VALIDATE_URL)) {  // juntando o sanitize com o validate, desse modo se a URL limpa não for válida
            $erros2[] = "Informe uma URL válida!";    // array de erros recebe uma mensagem de erro
        }
    
    // Verificando se há erros
    if(!empty($erros2)) {    // se o array erros não estiver vazio
        foreach($erros2 as $erro2) {  // para cada erro dentro do array
            echo "<li>$erro2</li>";      // mostra o erro numa lista
        }
    } else {
        echo "Dados enviados.";
    }
}

?>
<!-- Usando o método POST, os dados são passados sem o usuário poder ver -->
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">     <!-- usa o método POST e envia os dados do formulário para este mesmo arquivo -->
Nome: <input type = "text" name = "nome"> <br> <br>     <!-- name é o parâmetro que se passa -->
Idade: <input type = "text" name = "idade"> <br> <br>     <!-- name é o parâmetro que se passa -->
Email: <input type = "text" name = "email"> <br> <br>
URL: <input type = "text" name = "url"> <br> <br>
<!-- <input type = "submit" name = "enviar"> -> Isso aqui apareceria no POST pois também é input, mas funciona -->
<button type = "submit" name = "enviar-formulario2"> Enviar </button>
</form>

</body>
</html>