<?php

  session_start();
  include_once("./conexao.php");

  $dadosLogin = $_POST;
  
  $comando = "SELECT * FROM usuarios WHERE `email` = '{$dadosLogin["email"]}' AND `senha` = md5('{$dadosLogin["senha"]}')"; 

  $result = mysqli_query($conn, $comando); 

  $usuario = mysqli_fetch_assoc($result);

  if($usuario != NULL){
    $_SESSION["nome_usuario"] = $usuario["nome_usuario"];
    $_SESSION["id"] = $usuario["id"];
    $_SESSION["logado"] = TRUE;
    return header("location: ../pages/principal.php");
  }

  return header("location: ../pages/login.php");

?>