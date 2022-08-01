<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study - Perfil </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/postagem.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body class="body">

  <header id="header"></header>

  <div class="conf">
    <div class="row">

      <div class="col xl3 offset-xl2 l4 offset-l2 m5 offset-m2 s7 offset-s3">
        <div class="input-field ">
          <input id="first_name" type="text">
          <label for="first_name">Titulo</label>
        </div>

        <div class="input-field ">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Descrição</label>
        </div>

        <div class="input-field">
          <select multiple>
            <option value="" disabled selected>Linguagens e ferramnetas</option>
            <option value="1">PHP</option>
            <option value="2">HTML</option>
            <option value="3">JavaScript</option>
            <option value="3">JAVA</option>
            <option value="3">SQL</option>
            <option value="3">MySql</option>
            <option value="3">Redes</option>
            <option value="3">Materialize</option>
          </select>
          <label>Categoria</label>
        </div>

        <div class="input-field">
          <p>Deseja deixar esse artigo publico?</p>
          <p>
            <label class="col xl2 offset-xl0 ">
              <input name="group1" type="radio" checked />
              <span>Sim</span>
            </label>
          </p>
          <p>
            <label class="col xl2 offset-xl0 ">
              <input name="group1" type="radio" checked />
              <span>Não</span>
            </label>
          </p>
        </div>

      </div>
    </div>
  </div>
  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>
  <script src="../js/global.js"> </script>
</body>

</html>