<?php

  include_once("../services/verificaLogin.php"); 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title> Connected Study - Página Principal </title>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../css/forms.css"/>
  <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css"/>
</head>
<body>
  <div class="container">

    <h1>
      <?= "Oi {$_SESSION["nome_usuario"]}" ?>
    </h1>
    
    <a href="../services/logout.php">
      Sair
    </a>

  </div>

  <script type="text/javascript" src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>