<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title> Connected Study - Perfil </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css" />
  <link rel="stylesheet" href="../css/perfil.css" />
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css" />
</head>

<body>

  <hader id="header"></hader>

  <div class="user-inf">
    <div class="row">

      <div class="col s12 center">
        <img src="https://www.w3schools.com/howto/img_avatar.png" alt="imagem de perfil do usuário"
          class="circle user-img" id="preview" /> <br>
        <div class="file-field input-field col xl2 offset-xl5">
          <div class="btn">
            <span>Alterar</span>
            <input type="file" id="img-input">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div>

      <div class="col xl3 offset-xl3 l5 offset-l1 m5 offset-m1 s10 offset-s1 m-top">
        <div class="input-field">
          <label for="first_name">Nome</label>
          <input id="first_name" type="text" value="nome">
        </div>

        <div class="input-field">
          <label for="first_name">E-mail</label>
          <input id="first_name" type="email" value="email@email.com" disabled>
        </div>

        <div class="input-field">
          <label for="first_name">Senha</label>
          <input id="first_name" type="password" value="12345678">
        </div>
      </div>

      <div class="col xl3 l5 m5 offset-m0 s10 offset-s1 m-top">
        <div class="input-field">
          <label for="first_name">Cidade</label>
          <input id="first_name" type="text" value="Sapucai-Mirim">
        </div>

        <div class="input-field">
          <label for="first_name">Telefone</label>
          <input id="first_name" type="text" value="35 99758-4699">
        </div>
        <div class="input-field">
          <select name="turma">
            <option value="I3B" selectad> I3A </option>
            <option value="I3B" selectad> I3B </option>
            <option value="I3B" selectad> I2A </option>
            <option value="I3B" selectad> I2B </option>
            <option value="I3B" selectad> I1A </option>
            <option value="I3B" selectad> I1B </option>
            <option value="I3B" selectad> Outros </option>
          </select>
          <label> Turma </label>
        </div>

        <div class="input-field">
          <button class="btn waves-effect waves-light right purple darken-3" id="enable">
            Salvar
            <i class="material-icons left">create</i>
          </button>

        </div>
      </div>

    </div>
  </div>

  <script src="../js/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
  <script src="../js/materialize.js"> </script>
  <script src="../js/global.js"> </script>
  <script>
  function readImage() {
    let file = null;

    if (this.files && this.files[0]) {
      file = new FileReader();
      file.onload = (e) => {
        document.getElementById("preview").src = e.target.result;
      };
      file.readAsDataURL(this.files[0]);
    }
  }

  document.getElementById("img-input").addEventListener("change", readImage, false);
  </script>

</body>



</html>