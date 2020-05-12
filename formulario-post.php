<?php
$tituloDaPagina = "Formulário - Método POST";
require_once("./inc/head.php");

?>

<body>
    <?php require_once("./inc/header.php");?>

    <main class="container my-5">
        
        <form action="recebe-informacao.php" method="POST" class="col-6 mx-auto border rounded bg-light p-4">
            <div class="form-row">
                <h3 class="text-center pt-2 pb-0">Formulário da Cadrastro</h3>
                <p class="text-center pt-0 pb-4">Preencha o formulário para fazer seu cadastro.</p>
            </div>

    <div class="form-row">

    <div class="form-group col-md-4"> 
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="inputNome" placeholder="Tereza@Estevam.com" required>
  </div>
  
  <div class="form-group col-md-4"> 
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="inputEmail" placeholder="Tereza@Estevam.com" required>
  </div>

  <div class="form-group col-md-4">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="inputSenha" placeholder="********" required>
  </div>
</div>

  <div class="form-group"> 
    <label for="endereco1">Endereço 1</label>
    <input type="text" class="form-control" id="endereco1" name="inputEndereco1" placeholder="Av. Sebastião Henriques, 575, apto.276">
  </div>

  <div class="form-group"> 
    <label for="endereco2">Endereço 2</label>
    <input type="text" class="form-control" id="endereco2" name="inputEndereco2" placeholder="Av. Bernardinho, 1343, apto.03">
  </div>

<div class="form-row">
  <div class="form-group col-md-6"> 
    <label for="cidade">Cidade</label>
    <input type="text" class="form-control" id="cidade" name="inputCidade"  placeholder="São Paulo">
  </div>

  <div class="form-group col-md-2"> 
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" name="inputEstado"  placeholder="SP">
  </div>

  <div class="form-group col-md-4"> 
    <label for="cep">CEP</label>
    <input type="text" class="form-control" id="cep" name="inputCep"  placeholder="88960-000">
  </div>
</div>

<div class="form-group">
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="aceite" name="inputAceite" >
    <label class="form-check-label" for="aceite">Estou da acordo com as políticas do site.</label>
  </div>
</div>

  <div class="form-group mt-4 mb-0 d-flex flex-row justify-content-end">
    <button type="reset" class="btn btn-secondary">Limpar</button>
    <button type="submit" class="btn btn-primary ml-2">Cadastrar</button>
  </div>
</form>
</main>

<?php require_once("./inc/footer.php");?>
</body>
</html>