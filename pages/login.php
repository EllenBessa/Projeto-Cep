<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title> Connected Study - Login </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/forms.css"/>
  <link rel="stylesheet" href="../css/login.css"/>
  <link rel="stylesheet" href="../css/background.css"/>
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css"/>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <!-- Background -->
  <div class="area" >
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
  </div >

  <div class="container">

    <div class="row">

      <div class="col s4 offset-s4">

        <div class="center z-depth-3">

          <div class="col s10 offset-s1">
            <h3 class="left"> Login </h3>
          </div>

          <form method="post" action="../services/login.php">
            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">mail</i>
              <input 
                name="email"
                id="icon_prefix" 
                type="email" 
                maxlength="80"
                autocomplete="off"
                required
              >
              <label for="icon_prefix">E-mail</label>
            </div>

            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">https</i>
              <input
                name="senha"
                id="icon_prefix" 
                type="password" 
                minlength="8"
                maxlength="32"
                autocomplete="off"
                required
              >
              <label for="icon_prefix">Senha</label>
            </div>

            <p>
              Ainda não tem uma conta? 
              <a href="./cadastro.php">
              Clique aqui.
              </a>
            </p>
      
            <br>

            <div class="input-field col s10 offset-s1">
              <button 
                class="btn waves-effect waves-light right deep-purple darken-4" 
                type="submit" 
              >
                Enviar
                <i class="material-icons right">send</i>
              </button>
            </div>
          </form>

        </div>

    </div>

  </div>

  <script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>