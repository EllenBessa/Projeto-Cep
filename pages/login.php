<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Login </title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="../assets/logo-menu.png" />

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/login.css" />
  <link rel="stylesheet" href="../css/background.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
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

          <div class="col s10 offset-s1">
            <h2 class="left"> Login </h2>
          </div>

          <form method="post" action="../services/login.php">
            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">mail</i>
              <input name="email" id="email" type="email" maxlength="80" autocomplete="off" required>
              <label for="email">E-mail</label>
            </div>

            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">https</i>
              <input name="senha" id="senha" type="password" minlength="8" maxlength="32" autocomplete="off" required>
              <label for="senha">Senha</label>
            </div>

            <div class="col s12">
              <spam>
                Ainda não tem uma conta?
                <a href="./cadastro.php">
                  Clique aqui.
                </a>
              </spam>
            </div>

            <br>

            <div class="input-field col s10 offset-s1">
              <button class="btn waves-effect waves-light right deep-purple accent-3" type="submit">
                Enviar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>

        </div>

      </div>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/materialize.js"> </script>
</body>

</html>