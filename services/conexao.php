<?php

  //Faz a conexao
  $servidor = "localhost";
  $usuario = "ellen";
  $senha = "ellen123";
  $banco = "cep";

  //criar a conexão
  $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
  
  //se ocorrer erro para a aplicação
  if(!$conn){
    die("Falha na conexão com o mySQL:" . mysqli_connect_error());
  }

?>