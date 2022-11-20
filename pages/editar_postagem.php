<?php

include_once("../services/verifica_login.php");
include_once("../services/conexao.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM artigos WHERE id = {$id}";

$result = mysqli_query($conn, $consulta);

$artigo = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Editar Artigos </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="../assets/logo-menu.png" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/criar_postagem.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body class="body">

  <?php require_once __DIR__ . "/default/header.php" ?>

  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">

        <form method="post" action="../services/editar_postagem.php" class="form">
          <input type="hidden" name="id" value="<?= $artigo['id'] ?>">
          <div class="col xl12 l12 m12 s12">
            <div class="input-field">
              <input id="titulo" name="titulo" type="text" maxlength="50" value="<?= $artigo['titulo'] ?>" required>
              <label for="titulo">Titulo</label>
            </div>

            <div class="input-field textarea">
              <textarea id="descricao" class="materialize-textarea" name="descricao" required><?= $artigo['descricao'] ?></textarea>
              <label for="descricao">Descrição</label>
            </div>

            <div class="input-field textarea">
              <textarea id="conteudo" class="materialize-textarea" name="conteudo" required><?= $artigo['conteudo'] ?></textarea>
              <label for="conteudo">Conteúdo</label>
            </div>

            <div class="input-field textarea">
              <textarea id="categoria" class="materialize-textarea" name="categoria" required><?= $artigo['categoria'] ?></textarea>
              <label for="categoria">Categoria</label>
            </div>

            <div class="input-field">
              <p>Deseja deixar esse artigo publico?</p>
              <p>
                <label class="col xl2 offset-xl0">
                  <input name="publico" type="radio" value="sim" <?php if ($artigo['publico'] == true) echo "checked" ?> />
                  <span>Sim</span>
                </label>
              </p>
              <p>
                <label class="col xl2 offset-xl0">
                  <input name="publico" type="radio" value="não" <?php if ($artigo['publico'] == true) echo "checked" ?> />
                  <span>Não</span>
                </label>
              </p>
            </div>
          </div>

          <button class="btn waves-effect waves-light right deep-purple accent-3" type="enviar" name="action">Enviar
            <i class="material-icons right">send</i>
          </button>
        </form>

      </div>

      <div class="col l6 m6 s12 preview" href="./visualizacao.php">
        <h3 class="center" id="titulo-preview">
          <?= $artigo['titulo'] ?>
        </h3>

        <div class="center" id="categorias-preview">
          <div class="chip"> <?= $artigo['categoria'] ?> </div>
        </div>

        <h6 class="center" id="descricao-preview">
          <?= $artigo['descricao'] ?>
        </h6>

        <p class="center" id="conteudo-preview">
          <?= $artigo['conteudo'] ?>
        </p>
      </div>

    </div>

  </div>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../js/materialize.js"> </script>

  <script>
    $("#titulo").change((e) => {
      $("#titulo-preview").text(e.target.value)
    })

    $("#descricao").change((e) => {
      $("#descricao-preview").text(e.target.value)
    })

    $("#conteudo").change((e) => {
      $("#conteudo-preview").text(e.target.value)
    })

    $("#categoria").change((e) => {
      const categoria = $('#categoria').val()

      $("#categorias-preview").html(`<div class="chip"> ${categoria} </div>`)

    })
  </script>
</body>

</html>