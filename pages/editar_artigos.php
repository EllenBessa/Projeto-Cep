<?php

  include_once("../services/verifica_login.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study | Editar Artigos </title>

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

  <div class="container">
    <div class="row">

      <div class="col l6 m6 s12">
        <form class="form">
          <div class="col xl12 l12 m12 s12">
            <div class="input-field">
              <input id="titulo" type="text" maxlength="50">
              <label for="titulo">Titulo</label>
            </div>

            <div class="input-field textarea">
              <textarea id="descricao" class="materialize-textarea" name="descricao"></textarea>
              <label for="descricao">Descrição</label>
            </div>

            <div class="input-field textarea">
              <textarea id="conteudo" class="materialize-textarea" name="conteudo"></textarea>
              <label for="conteudo">Conteúdo</label>
            </div>

            <div class="input-field">
              <select multiple id="categorias" name="categorias">
                <option value="" disabled selected>Linguagens e ferramentas</option>
                <option value="PHP">PHP</option>
                <option value="HTML">HTML</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Java">Java</option>
                <option value="SQL">SQL</option>
                <option value="Redes">Redes</option>
                <option value="Materialize">Materialize</option>
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

          <button class="btn waves-effect waves-light right" type="enviar" name="action">Editar
            <i class="material-icons right">send</i>
          </button>

        </form>
      </div>

      <div class="col l6 m6 s12 preview">
        <h3 class="center" id="titulo-preview">Titulo</h3>

        <div class="center" id="categorias-preview">

        </div>

        <h6 class="center" id="descricao-preview">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit
          dolorem reiciendis quia culpa
          obcaecati voluptatum harum cum sed voluptate laboriosam unde. </h6>

        <p class="center" id="conteudo-preview"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem
          ea consectetur
          aperiam
          asperiores quia
          voluptatibus veniam maiores nihil distinctio excepturi facilis a, dolores repudiandae nemo magni? Deleniti
          dolorem atque nostrum? </p>
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

  $("#categorias").change((e) => {
    const categoriasSelecionadas = $('#categorias').val()

    $("#categorias-preview").append(
      `<div class="chip"> ${categoriasSelecionadas[categoriasSelecionadas.length - 1]} </div>`)

  })
  </script>
</body>

</html>