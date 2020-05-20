<?php
// Iniciando a sessão
session_start();

require_once "./db_connect.php";

if(isset($_POST["btn-apagar"])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if(mysqli_query($connect, $sql)) {      // se ele conseguiu atualizar os dados
        $_SESSION['mensagem'] = "Cliente apagado com sucesso!";
        header('Location: ../index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao apagar cliente";
        header('Location: ../index.php');
    }
}
?>