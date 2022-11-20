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
  <title> Connected Study | Perfil </title>

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

  <div class="user-inf">
    <div class="row">

      <div class="col s12 center">
        <img src="<?= $usuario["avatar"] ?>" alt="imagem de perfil do usuário" class="circle user-img" id="avatar"
          onerror="this.onerror=null;this.src='../assets/avatar.png';" />
        <h5> <?= $usuario["nome_usuario"] ?> </h5>
      </div>

      <div class="col xl3 offset-xl3 l5 offset-l1 m5 offset-m1 s10 offset-s1 m-top">
        <div class="input-field">
          <label for="first_name">Nome</label>
          <input id="first_name" type="text" value="<?= $usuario["nome"] ?>" disabled>
        </div>

        <div class="input-field">
          <label for="first_name">E-mail</label>
          <input id="first_name" type="email" value="<?= $usuario["email"] ?>" disabled>
        </div>

        <div class="input-field">
          <label for="first_name">Senha</label>
          <input id="first_name" type="password" value="<?= $usuario["senha"] ?>" disabled>
        </div>
      </div>

      <div class="col xl3 l5 m5 offset-m0 s10 offset-s1 m-top">
        <div class="input-field">
          <label for="first_name">Cidade</label>
          <input id="first_name" type="text" value="<?= $usuario["cidade"] ?>" disabled>
        </div>

        <div class="input-field">
          <label for="first_name">Telefone</label>
          <input id="first_name" type="text" value="<?= $usuario["telefone"] ?>" disabled>
        </div>

        <?php
        if ($usuario["nivel_acesso"] != "Aluno") {
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
          <a href="./perfil_editar.php" class="btn waves-effect waves-light right deep-purple accent-3" id="enable">
            Editar
            <i class="material-icons left">create</i>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="../js/materialize.js"> </script>


</body>

</html>