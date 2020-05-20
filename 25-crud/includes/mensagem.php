<?php
// Iniciar sessão
session_start();

// verifica se tem a mensagem lá do create
if(isset($_SESSION['mensagem'])) {
?>

    <script>
    window.onload = function() {    // onload é pra carregar depois que toda a página for carregada
        M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})     // materialize css pop ups
    }
    </script>
    
<?php
}

// fecha a sessão
session_unset();
?>