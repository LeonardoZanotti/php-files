<?php
// Header
include_once "./includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3"> <!-- no small ele ocupa 12 e médio pra cima é 6 com push de 3 dos lados, centralizando a tabela -->
        <h3 class="light">Clientes</h3>     <!-- light deixa o título mais suave, tira o bold -->
        <table class="striped">     <!-- striped deixa a tabela zebrada -->
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Leonardo</td>
                    <td>Zanotti</td>
                    <td>leonardozanotti@gmail.com</td>
                    <td>18</td>
                    <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
            </tbody>
        </table>

        <br>

        <a href="./adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
// Footer
include_once "./includes/footer.php";
?>