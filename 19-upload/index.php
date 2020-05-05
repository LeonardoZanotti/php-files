<html>
<body>

<?php
echo "<hr>";

if(isset($_POST['enviar-formulario'])) {    // se tiver clicado no botão de enviar
    $formatosPermitidos = ['png', 'jpg', 'jpeg', 'gif'];    // formatos que o arquivo enviado pode ter
    $quantidadeArquivos = count($_FILES['arquivo']['name']);  // vê quantos itens tem no array name do array arquivo da superglobal $_FILES
    $contador = 0;      // contador starta em 0

    var_dump($_FILES);    // superglobal $_FILES permite ver todos os arquivos enviados --> é feito um array em cada índice
    echo "<hr>";

    while($contador < $quantidadeArquivos) {    // enquanto o contador for menor que a quantidade de arquivos que deu upload
        $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);   // função para pegar a extensão dos arquivos enviado --> busca os nomes dos arquivos enviados no input que tão no array name do array arquivo e pega a extensão deles, $contador é o índice
        //echo $extensao;

        echo "<br>";

        if(in_array($extensao, $formatosPermitidos)) {
            $pasta = "./arquivos/";     // pasta onde os arquivos vão ser salvos
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];   // pega o nome temporário dos arquivos do wampserver que tão na superglobal $_FILES
            $novoNome = uniqid().".$extensao";  // seta novo nome como um id único + a extensão dele mesmo, tipo vai ficar 1ffds14.png
        
            if(move_uploaded_file($temporario, $pasta.$novoNome)){  // faz upload e verifica se realmente houve o upload do arquivo temporário lá pra pasta arquivos com o novo nome
                $message[] = "Upload do arquivo " .$_FILES['arquivo']['name'][$contador]. " feito com sucesso para $pasta.$novoNome <br>";     // message recebe mensagem de sucesso
            } else {
                $message[] = "Não foi possível fazer o upload de " .$_FILES['arquivo']['name'][$contador]. "<br>";  // message recebe mensagem de erro
            }

        } else {
            $message[] = "O arquivo " .$_FILES['arquivo']['name'][$contador]. " possui extensão .$extensao, que é um formato inválido! <br>";      // message recebe mensagem de erro
        }

        echo $message[$contador];      // exibe o array message
        $contador++;
    }
    echo "<br>";
}
?>
<form 
    action="<?php echo $_SERVER['PHP_SELF'];?>"
    method="POST"
    enctype="multipart/form-data"
>  <!-- Envia o formulário para este mesmo site com método POST e permite upload de arquivos -->
        <input type="file" name="arquivo[]" multiple> <br> <br>    <!-- tipo file para poder dar upload de arquivo e pode ser multiplos, tanto é que o name é um array-->
        <input type="submit" name="enviar-formulario">
</form>

</body>
</html>