<?php

  session_start();
  include_once("./conexao.php");

  $dadosEdicaoPerfil = $_POST;
  
  if(isset($dadosEdicaoPerfil["nivel_acesso"])){
    $dadosEdicaoPerfil["turma"] = null;
  }

  if(isset($dadosEdicaoPerfil["senha"]) && $dadosEdicaoPerfil["senha"] != ""){
    $comando = "UPDATE usuarios SET nome = '{$dadosEdicaoPerfil['nome']}', avatar = '{$dadosEdicaoPerfil['avatar']}', cidade = '{$dadosEdicaoPerfil['cidade']}', telefone = '{$dadosEdicaoPerfil['telefone']}', turma = '{$dadosEdicaoPerfil['turma']}', senha = md5({$dadosEdicaoPerfil['senha']}) WHERE id = '{$dadosEdicaoPerfil['id']}' ";
  } else {
    $comando = "UPDATE usuarios SET nome = '{$dadosEdicaoPerfil['nome']}', avatar = '{$dadosEdicaoPerfil['avatar']}', cidade = '{$dadosEdicaoPerfil['cidade']}', telefone = '{$dadosEdicaoPerfil['telefone']}', turma = '{$dadosEdicaoPerfil['turma']}' WHERE id = '{$dadosEdicaoPerfil['id']}' ";
  }
  
  $_SESSION["avatar"] = $dadosEdicaoPerfil["avatar"];
  
  mysqli_query($conn, $comando);

  return header("location: ../pages/perfil.php");


?>