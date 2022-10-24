<?php

  include_once("../services/verifica_login.php");
  include_once("../services/conexao.php");

  $id = $_GET["id"];

  $consulta = "SELECT * FROM artigos WHERE id = {$id}";

  $result = mysqli_query($conn, $consulta);
  
  $artigo = mysqli_fetch_assoc($result);

  $data = strtotime($artigo["data_publicacao"]);

  $data = date('m/d/Y', $data);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | <?= $artigo["titulo"] ?> </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/visualizacao.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body class="body">

  <header id="header"></header>

  <div class="container">
    <div class="row">

      <div class="col s12 offset-s0">
        <div class="col s12 borda">
          <h1 class="titulo"><?= $artigo["titulo"]?></h1>

          <time><?= $data ?></time>

          <h6 class="justify"><?= $artigo["descricao"]?></h6>

          <p class="justify"><?= $artigo["conteudo"]?></p>

          <p class="justify">
            <? $artigo["autor"]?>
          </p>

        </div>

        <?php
          if ($artigo["autor"] == $_SESSION["nome_usuario"]){
        ?>
        <button class="btn waves-effect waves-light right deep-purple accent-3" type="submit" name="action">Editar
          <i class="material-icons right">edit</i>
        </button>
        <?php
          }
        ?>
      </div>

    </div>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>
  <script src="../js/global.js"> </script>

</body>