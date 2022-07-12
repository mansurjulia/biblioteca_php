<?php 

    include('config.php');  
    require_once ('repository/LivroRepository.php');
    $titulo = filter_input(INPUT_GET, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);

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

      <?php foreach(fnLocalizaLivroPorNome($titulo) as $livro): ?>

        <div class="card-vitrine">
            <img src="<?= $livro->foto ?>" class="card-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Título: <?= $livro->titulo ?></h5>
                <p class="card-text">Autor: <?= $livro->autor ?></p>
            </div>
            <p class="card-text">Editora: <?= $livro->editora ?></p>
        </div> 
        <br> 

  <?php endforeach; ?>

   

    <?php include("rodape.php"); ?>
  </body>

</html>