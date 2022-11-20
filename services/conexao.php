<?php

  //Faz a conexao
  $servidor = "sql812.main-hosting.eu";
  $usuario = "u332567113_connectedstudy";
  $senha = "Teste123";
  $banco = "u332567113_connectedstudy";

  //criar a conexão
  $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
  
  //se ocorrer erro para a aplicação
  if(!$conn){
    die("Falha na conexão com o mySQL:" . mysqli_connect_error());
  }

?>