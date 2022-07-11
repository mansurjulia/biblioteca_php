<?php 

    include('config.php');  

?>

<!doctype html>

<html lang="pt_BR">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

  <body>
    <?php include('navbar.php'); ?>

    <link rel="stylesheet" href="css/estilo.css">

    <div class="col-10 offset-1 mt-5">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Biblioteca Online</h1>
                <p class="col-md-8 fs-4">Projeto de arquivo mostrando uma biblioteca online. <br> Por Julia Ferreira Mansur.</p>
            </div>
        </div>
    </div>

    <br><br>

<div class="card-group">
  <div class="card">
    <img src="imagens/HP_PedraFilosofal.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e a Pedra Filosofal</h5>
      <p class="card-text">Primeiro livro da série</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="imagens/HP_CamaraSecreta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e a Câmara Secreta</h5>
      <p class="card-text">Segundo livro da série</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="imagens/HP_PrisioneiroAzkaban.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e o Prisioneiro de Azkaban</h5>
      <p class="card-text">Terceiro livro da série.</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>


  <div class="card">
    <img src="imagens/HP_CaliceFogo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e o Cálice de Fogo</h5>
      <p class="card-text">Quarto livro da série</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="imagens/HP_OrdemFenix.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e a Ordem da Fênix</h5>
      <p class="card-text">Quinto livro da série</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>
  <div class="card">
    <img src="imagens/HP_EnigmaPrincipe.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Harry Potter e o Enigma do Príncipe</h5>
      <p class="card-text">Sexto livro da série.</p>
      <div class="card-body">
        <a href="#" class="card-link">Download</a>
      </div>
    </div>
  </div>


   

    <?php include("rodape.php"); ?>
  </body>

</html>