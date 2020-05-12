<?php
$tituloDaPagina = "Principal - Método GET e POST";
require_once("./inc/head.php");

?>

<body>
    <?php require_once("./inc/header.php");?>

    <main class="container my-5 ">
        <h3 class="mt-5 mb-4">Nossos produtos</h3>
    <div class="card-deck">
        
  <div class="card">
    <img class="card-img-top" src=".\assets\imagem\desenho-poteMel.jpg.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Pote 1</h4>
      <p class="card-text">Descrição do produto</p>
      <p class="text-info d-inline">R$ 99.99</p>
      <button type="button" class="btn btn-primary float-right">Comprar</button>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".\assets\imagem\desenho-poteMel.jpg.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Pote 2</h4>
      <p class="card-text">Descrição do produto</p> 
      <p class="text-info d-inline">R$ 99.99</p>
      <button type="button" class="btn btn-primary float-right">Comprar</button>
    </div>
  </div>

  <div class="card">
    <img class="card-img-top" src=".\assets\imagem\desenho-poteMel.jpg.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">Pote 3</h4>
      <p class="card-text">Descrição do produto</p>
      <p class="text-info d-inline">R$ 99.99</p>
      <button type="button" class="btn btn-primary float-right">Comprar</button>
    </div>
  </div>
</div>       
</main>
<?php require_once("./inc/footer.php");?>
</body>
</html>
