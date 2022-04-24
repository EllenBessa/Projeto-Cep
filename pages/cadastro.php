<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title> Connected Study - Cadastro </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/forms.css"/>
  <link rel="stylesheet" href="../css/cadastro.css"/>
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

          <form method="post" action="../services/cadastro.php">
            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">account_circle</i>
              <input
                type="text"
                name="nome_usuario"
                maxlength="30"
                autocomplete="off"
                required
              > 
              <label for="icon_prefix">Nome de Usuário</label>
            </div>

                   
            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">account_box</i>
              <input
                type="text" 
                name="nome" 
                maxlength="100"
                autocomplete="off"
                required
              > 
              <label for="icon_prefix">Nome Completo</label>
            </div>

            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">mail</i>
              <input 
                type="email" 
                name="email" 
                maxlength="80"
                autocomplete="off"
                required
              > 
              <label for="icon_prefix">E-mail</label>
            </div>

            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">https</i>
              <input 
                type="password" 
                name="senha"
                maxlength="32"
                autocomplete="off"
                required
              > 
              <label for="icon_prefix">Senha</label>
            </div>
        
            <select name="turma" required>
              <option value="I3A" selected> I3A </option>
              <option value="I3B"> I3B </option>
            </select> <br>
        
            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">location_on</i>
              <input 
                type="text" 
                name="cidade"
                maxlength="50"
                autocomplete="off"
              > 
              <label for="icon_prefix">Cidade</label>
            </div>

            <div class="input-field col s10 offset-s1">
              <i class="material-icons prefix">phone</i>
              <input 
                type="text" 
                name="telefone"
                maxlength="20"
                autocomplete="off"
              > 
              <label for="icon_prefix">Telefone</label>
            </div>
        
            <select name="nivel_acesso" required>
              <option value="Aluno" selected> Aluno </option>
              <option value="Professor"> Professor </option>
              <option value="Administrador"> Administrador </option>
            </select> <br>
        
            <input 
              type="submit" 
              value="Enviar"
            >
          </form>
          
        </div>

      </div>

    </div>

  </div>

  <script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>