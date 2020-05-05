<?php
// Requerindo conexão ao banco de dados
require_once './db_connect.php';

// Sessão
session_start();

if(isset($_POST['btn-entrar'])) {   // se clicar no botão de entrar
    $erros = array();   // cria o array de erros
    $login = mysqli_escape_string($connect, $_POST['login']);   // variável login, vai enviar uma string lá pro banco de dados, através da conexão definida em $connect, vai mandar a string do índice login que tá na superglobal $_POST
    $senha = mysqli_escape_string($connect, $_POST['senha']);   // variável senha, vai enviar uma string lá pro banco de dados, através da conexão definida em $connect, vai mandar a string do índice password que tá na superglobal $_POST
    
    if(empty($login) or empty($senha)) {
        $erros[] = "<li>O login e a senha devem ser preechindos!</li>";
    } 
    else {
        // sql injection (colocar códigos sql no $login pra pegar dados do banco de dados)
        // 105 OR 1=1   
        // 1; DROP TABLE usuarios;
        // pra barrar isso a gente usou o mysqli_escape_string ali em cima
        
        $sql = "SELECT login FROM usuarios WHERE login = '$login'"; // comando sql pra ver se o login existe
        $resultado = mysqli_query($connect, $sql);   // verifica na conexão se o login sql existe
        $senha = md5($senha);   // criptografa a senha informada para md5

        if(mysqli_num_rows($resultado) > 0) {   // verifica se o resultado tem número de linhas maior que 0 --> deu bom
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";    // comando sql pra selecionar o login e senha do usuário pra verificar se tá certo
            $resultado = mysqli_query($connect, $sql);  // pequisa no banco de dados se tá certo msm

            if(mysqli_num_rows($resultado) > 0) {
                $dados = mysqli_fetch_array($resultado);    // converte $resultado num array a atribui esse array à variável dados
                mysqli_close($connect);     // importante fechar a conexão após fazer ela
                $_SESSION['logado'] = true;     // cria a sessão logado pra gankar a rapaziada q é comédia e quer ir direto no home.php
                $_SESSION['id_usuario'] = $dados['id']; // pega o id do usuário na variável dados e passa pro índice id_usuario na superglobal SESSION
                header('Location: ./home.php');   // redireciona o usuário pra home.php
            }
            else {
                $erros[] = "<li>Usuário e senha não conferem</li>";
            }
        }
        else {
            $erros[] = "<li>Usuário inexistente</li>";
        }
    }
}
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Login</h1>
        
        <?php
            if(!empty($erros)) {
                foreach($erros as $erro) {
                    echo $erro;
                }
            }
        ?>
        
        <hr>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">    <!-- mandar o formulário pra esse site msm -->
            Login: <input type="text" name="login"> <br> <br>
            Senha: <input type="password" name="senha"> <br> <br>
            <button type="submit" name="btn-entrar"> Entrar </button>
        </form>
    </body>
</html>