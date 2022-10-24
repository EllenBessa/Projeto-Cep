<?php

  include_once("../services/verifica_login.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Criar Postagem </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/criar_postagem.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body class="body">

  <header id="header"></header>

  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">

        <form method="post" action="../services/criar_postagem.php" class="form">
          <div class="col xl12 l12 m12 s12">
            <div class="input-field">
              <input id="titulo" name="titulo" type="text" maxlength="50" required>
              <label for="titulo">Titulo</label>
            </div>

            <div class="input-field textarea">
              <textarea id="descricao" class="materialize-textarea" name="descricao" required></textarea>
              <label for="descricao">Descrição</label>
            </div>

            <div class="input-field textarea">
              <textarea id="conteudo" class="materialize-textarea" name="conteudo" required></textarea>
              <label for="conteudo">Conteúdo</label>
            </div>

            <div class="input-field">
              <select id="categoria" name="categoria">
                <option value="Linguagens e ferramnetas" selected>Linguagens e ferramentas</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Java">Java</option>
                <option value="SQL">SQL</option>
                <option value="Redes">Redes</option>
                <option value="Materialize">Framework</option>
              </select>
              <label>Categoria</label>
            </div>

            <div class="input-field">
              <p>Deseja deixar esse artigo publico?</p>
              <p>
                <label class="col xl2 offset-xl0">
                  <input name="publico" type="radio" value="sim" checked />
                  <span>Sim</span>
                </label>
              </p>
              <p>
                <label class="col xl2 offset-xl0">
                  <input name="publico" type="radio" value="não" />
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
        <h3 class="center" id="titulo-preview">Titulo</h3>

        <div class="center" id="categorias-preview"></div>

        <h6 class="center" id="descricao-preview"> Descrição </h6>

        <p class="center" id="conteudo-preview"> Conteudo </p>
      </div>

    </div>

  </div>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>
  <script src="../js/global.js"> </script>

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