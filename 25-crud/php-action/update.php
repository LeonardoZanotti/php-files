<?php
// Iniciando a sessão
session_start();

require_once "./db_connect.php";

if(isset($_POST["btn-editar"])) {
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);

    $sql = "UPDATE clientes SET
        nome = '$nome',
        sobrenome = '$sobrenome',
        email = '$email',
        idade = '$idade'
        WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {      // se ele conseguiu atualizar os dados
        $_SESSION['mensagem'] = "Cliente atualizado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao atualizar cliente";
        header('Location: ../index.php');
    }
}
?>