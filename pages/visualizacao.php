<?php

include_once("../services/verifica_login.php");
include_once("../services/conexao.php");

$id = $_GET["id"];

$consulta = "SELECT * FROM artigos WHERE id = {$id}";

$result = mysqli_query($conn, $consulta);

$artigo = mysqli_fetch_assoc($result);

$data = strtotime($artigo["data_publicacao"]);

$data = date('m/d/Y', $data);

// Busca os comentários
$consultaComentarios = "SELECT comentarios.*, usuarios.nome_usuario, usuarios.avatar FROM comentarios JOIN usuarios ON comentarios.id_usuario = usuarios.id WHERE comentarios.id_artigo = {$id} ORDER BY id desc";

$resultComentarios = mysqli_query($conn, $consultaComentarios);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | <?= $artigo["titulo"] ?> </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="../assets/logo-menu.png" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/visualizacao.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />

</head>

<body>

  <?php require_once __DIR__ . "/default/header.php" ?>

  <main class="container">
    <div class="row">

      <div class="col s12 offset-s0 m12 offset-m0 l12 offset-l0 lg10 offset-lg1">
        <section class="col s12 caixa-artigo">
          <h1><?= $artigo["titulo"] ?></h1>

          <span>
            <?= $artigo["autor"] . " • " . $data ?>
          </span>

          <span class="tag">
            <?= $artigo["categoria"] ?>
          </span>

          <p class="descricao"><?= $artigo["descricao"] ?></p>

          <p class="conteudo">
            <?= $artigo["conteudo"] ?>
          </p>

        </section>

        <?php
        if ($artigo["autor"] == $_SESSION["nome_usuario"] || $_SESSION["nivel_acesso"] == "Professor") {
        ?>
        <div class="col s12">
          <a href="./editar_postagem.php?id=<?= $artigo['id'] ?>"
            class="btn waves-effect waves-light right deep-purple accent-3" type="submit" name="action"
            style="margin: 0 12px;">
            <i class="material-icons">edit</i>
          </a>

          <buttton id="abrir-modal" class="btn waves-effect waves-light right deep-purple accent-3 modal-trigger"
            type="submit" name="action">
            <i class="material-icons">delete</i>
          </buttton>
        </div>
        <?php
        }
        ?>

        <section class="col s12 comentarios">
          <h5> Comentários </h5>

          <form action="../services/adicionar_comentario.php?idArtigo=<?= $artigo["id"] ?>" method="post"
            class="col s12 adicionar-comentario">
            <textarea type="text" name="comentario" placeholder="Deixe seu comentário..." class="materialize-textarea"
              maxlength="300" required></textarea>
            <button class="btn waves-effect waves-light deep-purple accent-3" type="submit" name="action"><i
                class="material-icons">send</i>
            </button>
          </form>

          <?php
          while ($comentarios = mysqli_fetch_assoc($resultComentarios)) {
          ?>

          <div class="col s12 comentario">
            <img src=<?= $comentarios["avatar"] ?> alt="imagem de perfil do usuário" class="circle imagem-comentario"
              onerror="this.onerror=null;this.src='../assets/avatar.png';" />

            <div>
              <strong class="comentario-nome"><?= $comentarios["nome_usuario"] ?></strong>
              <p class="comentario-conteudo"><?= $comentarios["conteudo"] ?></p>
            </div>

            <?php
              if ($artigo["autor"] == $_SESSION["nome_usuario"] || $_SESSION["nivel_acesso"] == "Professor") {
            ?>

            <buttton id="abrir-modal-comentario" class="waves-effect waves-light right modal-trigger"
              style="position: absolute; right: 6px;">
              <i class="material-icons">delete</i>
            </buttton>

            <?php
              }
            ?>
          </div>

          <!-- Modal comentario -->
          <dialog id="modal-excluir-comentario" class="modal-exclusao">
            <strong>Deseja excluir esse comentario?</strong>
            <p>Após excluido os dados desse comentario não poderão ser recuperados.</p>

            <footer>
              <a id="fechar-modal-comentario">Cancelar</a>
              <a href="../services/deletar_comentario.php?id=<?= $comentarios["id"] ?>&id_artigo=<?=$id?>">Excluir</a>
            </footer>
          </dialog>

          <?php
          }
          ?>
        </section>

      </div>

    </div>

    <!-- Modal -->
    <dialog id="modal-excluir" class="modal-exclusao">
      <strong>Deseja excluir esse artigo?</strong>
      <p>Após excluido os dados desse artigo não poderão ser recuperados.</p>

      <footer>
        <a id="fechar-modal">Cancelar</a>
        <a href="../services/deletar.php?id=<?= $artigo['id'] ?>">Excluir</a>
      </footer>
    </dialog>

  </main>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../js/materialize.js"> </script>

  <script>
  $("#abrir-modal").click(() => {
    $("#modal-excluir").attr("open", true)
  })

  $("#fechar-modal").click(() => {
    $("#modal-excluir").removeAttr("open")
  })

  $("#abrir-modal-comentario").click(() => {
    $("#modal-excluir-comentario").attr("open", true)
  })

  $("#fechar-modal-comentario").click(() => {
    $("#modal-excluir-comentario").removeAttr("open")
  })
  </script>


</body>