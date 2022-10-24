<?php

  session_start();

  include_once("./conexao.php");

  $dadosCadastrais = $_POST;

  if($dadosCadastrais["nivel_acesso"] != "Aluno"){
    $dadosCadastrais["turma"] = NULL;
  }
  
  $comando = "INSERT INTO usuarios (`nome_usuario`, `nome`, `email`, `senha`, `turma`, `cidade`, `telefone`, `nivel_acesso`) VALUES ('{$dadosCadastrais["nome_usuario"]}', '{$dadosCadastrais["nome"]}', '{$dadosCadastrais["email"]}', md5('{$dadosCadastrais["senha"]}'), '{$dadosCadastrais["turma"]}', '{$dadosCadastrais["cidade"]}', '{$dadosCadastrais["telefone"]}', '{$dadosCadastrais["nivel_acesso"]}')"; 

  try {
    // mysqli_query(variavel com a conexão, comando do banco de dados) -> essa função permite dar um comando no banco de dados
    mysqli_query($conn, $comando);
  } catch(Exception $e) {
    $_SESSION["erro_cadastro"] = true;
    return header("location: ../pages/cadastro.php");
  }

  if(mysqli_affected_rows($conn) != 0){
    $_SESSION["erro_cadastro"] = false;
    return header("location: ../pages/login.php");
  }

?>