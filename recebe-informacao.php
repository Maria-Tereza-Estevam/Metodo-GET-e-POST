<?php
$tituloDaPagina = "Pagina que recebe";
require_once("./inc/head.php");

?>

<body>
    <?php require_once("./inc/header.php");?>
    <main>

    
    <?php if($_POST && isset($_POST)):?>

        <!--para vizualizaro array-->
        echo "<pre>";
            var_dump($_POST);
        echo "<pre>";
        ?>
<?php
        $nome = $_POST["inputNome"];
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputSenha"];
        $endereco = $_POST["inputEndereco1"];
        $cidade = $_POST["inputCidade"];
        $estado = $_POST["inputEstado"];
        $cep = $_POST["inputCep"];
        $aceitou = $_POST["inputAceite"]
    ?>

 <article>
                <h2>Respostas Recebidas por POST:</h2>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Estado</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Políticas de Privacidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $nome; ?></th>
                            <td><?= $email; ?></td>
                            <td><?= $senha; ?></td>
                            <td><?= $endereco; ?></td>
                            <td><?= $cidade; ?></td>
                            <td><?= $estado; ?></td>
                            <td><?= $cep; ?></td>
                            <td><?= $aceitou == "on" ? "aceitou" : "não aceitou"; ?></td>
                        </tr>
                   
                        <tr>
                            <th scope="row"><?= $nome; ?></th>
                            <td><?= $email; ?></td>
                            <td><?= $senha; ?></td>
                            <td><?= $endereco; ?></td>
                            <td><?= $cidade; ?></td>
                            <td><?= $estado; ?></td>
                            <td><?= $cep; ?></td>
                            <td><?= $aceitou == "on" ? "aceitou" : "não aceitou"; ?></td>
                        </tr>
                    </tbody>
                </table>
            </article>


<?php else: ?>

<article class="alert alert-warning col-6 mx-auto" role="alert">
    <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
    <p>Por favor, preencha o formulário <a href="metodo-get.php" title="Acessar o Formulário GET" rel="next">GET</a> ou o formulário <a href="metodo-post.php" title="Acessar o Formulário POST" rel="next">POST</a>.</p>
    <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br/>deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
</article>

<?php endif; ?>
        
    </main>

    
<?php require_once("./inc/footer.php");?>
</body>
</html>