<?php
// Requerindo conexão ao banco de dados
require_once './db_connect.php';

// Sessão
session_start();

// Verificamdp se existe a sessão logado
if(!isset($_SESSION['logado'])) {   // se não existe a sessão, então o usuário tá tentando ser comédia e ir direto pra home ou qualquer coisa
    header("Location: ./index.php"); // redireciona o indivídio pra página de login dnv
}

// Dados do usuário
$id = $_SESSION['id_usuario'];  // define o id com o id que tava na superglobal
$sql = "SELECT * FROM usuarios WHERE id = '$id'";   // comando sql pra pegar todos os dados do usuário onde o id for aquele ali informado
$resultado = mysqli_query($connect, $sql);  // executa o comando sql no banco de dados conexão dale
$dados = mysqli_fetch_array($resultado);    // converte resultado em um array e atribui esse array à dados
mysqli_close($connect);     // importante fechar a conexão após fazer ela
?>

<html>
<head>
    <title>Página restrita</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Olá <?php echo $dados['nome'];?></h1>   <!-- Olá + nome do usuário que tava no índice nome no array dados -->
    <a href="./logout.php">Sair</a>
</body>
</html>