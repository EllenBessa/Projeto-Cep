<?php

  include_once("../services/verifica_login.php");
  include_once("../services/conexao.php");
  include_once("../services/listar_artigos.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Artigos </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/artigos.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body>

  <header id="header"></header>

  <div class="container">
    <div class="row">

      <div class="col s12 m12 l12 xl12 valign-wrapper altura">
        <span class="formatacao">Artigos</span>
      </div>

      <?php
        while($linha = mysqli_fetch_assoc($result)){
      ?>

      <a href="./visualizacao.php?id=<?= $linha["id"] ?>">
        <div class="col s9 offset-s1 m6 l6 xl4">
          <div class="card altura-card">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">
                <?= $linha["titulo"]; ?>
              </span>
              <p class="texto-card">
                <?= $linha["descricao"]; ?>
              </p>
            </div>
          </div>
        </div>
      </a>

      <?php
        }
      ?>

    </div>

  </div>

  <div class="fixed-action-btn">
    <a class="btn-floating btn-large deep-purple accent-3" href="./criar_postagem.php">
      <i class="large material-icons">add</i>
    </a>
  </div>


  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>
  <script src="../js/global.js"> </script>

</body>

</html>