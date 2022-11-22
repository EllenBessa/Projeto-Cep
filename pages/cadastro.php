<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Cadastro </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="../assets/logo-menu.png" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/cadastro.css" />
  <link rel="stylesheet" href="../css/background.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

  <!-- Background -->
  <div class="area">

    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

  <div class="container">

    <div class="row">

      <div class="col s4 offset-s4">

        <div class="center z-depth-3">

          <h3>Cadastro</h3>

          <?php 
            if(isset($_SESSION["erro_cadastro"]) && $_SESSION["erro_cadastro"] == true ) {
          ?>

          <div class='mensagem-erro'>
            <i class='material-icons'>error</i>
            <p> <strong> Erro ao cadastrar: </strong> o nome de usuário ou e-mail já esta em uso </p>
          </div>

          <?php
            }
          ?>

          <form method="post" action="../services/cadastro.php">

            <div class="input-field col s12 offset-s0 m6">
              <i class="material-icons prefix">account_circle</i>
              <input name="nome_usuario" maxlength="30" autocomplete="off" placeholder="Nome de Usuário" required>
            </div>

            <div class="input-field col s12 m6 offset-m0">
              <i class="material-icons prefix">phone</i>
              <input name="telefone" maxlength="20" autocomplete="off" placeholder="Telefone" class="telefone">
            </div>


            <div class="input-field col s12  offset-s0 m6">
              <i class="material-icons prefix">account_box</i>
              <input name="nome" maxlength="100" autocomplete="off" placeholder="Nome Completo" required>
            </div>

            <div class="input-field col s12 m6 offset-m0">
              <i class="material-icons prefix">location_on</i>
              <input name="cidade" maxlength="50" autocomplete="off" placeholder="Cidade">
            </div>

            <div class="input-field col s12 offset-s0 m6">
              <i class="material-icons prefix black-text">mail</i>
              <input type="email" name="email" maxlength="80" autocomplete="off" placeholder="E-mail" required>
            </div>

            <div class="input-field col s11 offset-s1 m6 offset-m0">
              <select name="turma" required>
                <option value="I3A" selected> I3A </option>
                <option value="I3B"> I3B </option>
                <option value="I3A" selected> I2A </option>
                <option value="I3B"> I2B </option>
                <option value="I3A" selected> I1A </option>
                <option value="I3B"> I1B </option>
                <option value="I3A" selected> Visitante </option>
              </select>
              <label> Turma </label>
            </div>

            <div class="input-field col s12 offset-s0 m6">
              <i class="material-icons prefix black-text">https</i>
              <input type="password" name="senha" minlength="8" maxlength="32" autocomplete="off" placeholder="Senha"
                required>
            </div>

            <div class="input-field col s11 offset-s1 m6 offset-m0">
              <select name="nivel_acesso" id="nivel_acesso">
                <option value="Aluno" selected>Aluno</option>
                <option value="Professor">Professor</option>
              </select>
              <label>Nivel de Acesso</label>
            </div>

            <div class="input-field col s12 offset-s0 m6 offset-m3" id="senha_professor">
              <i class="material-icons prefix black-text">https</i>
              <input type="password" name="senha_professor" maxlength="32" autocomplete="off"
                placeholder="Senha professor">
            </div>

            <div class="input-field col s12 m12">
              <button class="btn waves-effect waves-light right deep-purple accent-3" type="submit">
                Enviar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>

        </div>

      </div>

    </div>

  </div>

  <script>
  $(".telefone").mask("(00) 0 0000-0000");
  </script>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>

  <script>
  $('#senha_professor').hide();

  $('#nivel_acesso').change(() => {
    let valorInput = $('#nivel_acesso').val();

    if (valorInput === "Professor") {
      $('#senha_professor').show();
    } else {
      $('#senha_professor').hide();
    }

  })
  </script>
</body>

</html>