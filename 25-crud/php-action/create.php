<?php
// Iniciando a sessão
session_start();

require_once "./db_connect.php";

// Fazendo validações pra impedir falhas de segurança
function clear($input) {
    // torna a conexão global pra dar pra usar aqui no local
    global $connect;

    // impedir sql injection (inserir código mysql nos inputs)
    // basicamente ele torna tudo string, então os comandos sql não funcionam
    $validation_sql = mysqli_escape_string($connect, $input);

    // impedir cross site scription (XSS) (inserir scripts nos inputs)
    // isso faz os caracteres especiais como < e > serem referidos por código html, tipo &lt; e &gt;
    $validation_xss = htmlspecialchars($validation_sql);

    return $validation_xss;
}

if(isset($_POST["btn-cadastrar"])) {
    // sem usar a função pra limpar os input vc podia fazer umas parada tipo
    // <script> alert("teste") </script>
    // <script> location.href="http://google.com" </script>
    // isso ai pode destruir teu input
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

    if(mysqli_query($connect, $sql)) {      // se ele conseguiu inserir os dados
        $_SESSION['mensagem'] = "Cliente cadastrado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar cliente";
        header('Location: ../index.php');
    }
}
?>