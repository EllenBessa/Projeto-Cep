<?php

  include_once("../services/conexao.php");
  include_once("../services/verifica_login.php");

  $comando = "SELECT * FROM usuarios WHERE `id` = '{$_SESSION["id"]}'"; 

  $result = mysqli_query($conn, $comando); 

  $usuario = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Editar Perfil </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="../assets/logo-menu.png" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/perfil.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body>

  <?php require_once __DIR__ . "/default/header.php" ?>

  <form action="../services/perfil_editar.php" method="post">

    <div class="user-inf">
      <div class="row">

        <div class="col s12 center">
          <img src="<?= $usuario["avatar"] ?>" alt="imagem de perfil do usuário" class="circle user-img" id="avatar"
            onerror="this.onerror=null;this.src='../assets/avatar.png';" />
          <br>
          <div class="col s10 offset-s1 m8 offset-l2 l2 offset-l5">

            <div class="input-field">
              <label for="avatar">URL da imagem</label>
              <input id="avatar" type="text" name="avatar" value="<?= $usuario["avatar"] ?>">
            </div>

          </div>

        </div>

        <input type="hidden" name="id" value="<?= $usuario["id"] ?>">

        <div class="col xl3 offset-xl3 l5 offset-l1 m5 offset-m1 s10 offset-s1 m-top">
          <div class="input-field">
            <label for="nome">Nome</label>
            <input id="nome" type="text" name="nome" value="<?= $usuario["nome"] ?>">
          </div>

          <div class="input-field">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="<?= $usuario["email"] ?>" disabled>
          </div>

          <div class="input-field">
            <label for="senha">Senha</label>
            <input id="senha" type="password" name="senha">
          </div>
        </div>

        <div class="col xl3 l5 m5 offset-m0 s10 offset-s1 m-top">
          <div class="input-field">
            <label for="cidade">Cidade</label>
            <input id="cidade" type="text" name="cidade" value="<?= $usuario["cidade"] ?>">
          </div>

          <div class="input-field">
            <label for="telefone">Telefone</label>
            <input id="telefone" type="text" name="telefone" value="<?= $usuario["telefone"] ?>">
          </div>

          <?php
          if($usuario["nivel_acesso"] != "Aluno") {
        ?>

          <div class="input-field">
            <label for="nivel_acesso">Nivel de Acesso</label>
            <input id="nivel_acesso" name="nivel_acesso" type="text" value="<?= $usuario["nivel_acesso"] ?>" disabled>
          </div>

          <?php
          } else {
        ?>

          <div class="input-field">
            <label for="Turma">Turma</label>
            <input id="Turma" name="Turma" type="text" value="<?= $usuario["turma"] ?>" disabled>
          </div>

          <?php
          }
        ?>

          <div class="input-field">
            <button type="submit" class="btn waves-effect waves-light right deep-purple accent-3" id="enable">
              Salvar
              <i class="material-icons left">save</i>
            </button>

          </div>
        </div>
      </div>
    </div>

  </form>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../js/materialize.js"> </script>
</body>

</html>