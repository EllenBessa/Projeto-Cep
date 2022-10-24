<?php

  session_start();
  include_once("./conexao.php");

  $dados = $_POST;

  $dataPublicacao = $dados["publico"] == "sim" ? "now()" : NULL;

  if ($dados["publico"] == "sim") {
    $comando = "INSERT INTO artigos (`titulo`, `autor`, `descricao`, `conteudo`, `categoria`, `data_publicacao`, `publico`) VALUES ('{$dados['titulo']}', '{$_SESSION["nome_usuario"]}', '{$dados['descricao']}', '{$dados['conteudo']}', '{$dados['categoria']}', {$dataPublicacao}, 1)";
  } else {
    $comando = "INSERT INTO artigos (`titulo`, `autor`, `descricao`, `conteudo`, `categoria`) VALUES ('{$dados['titulo']}', '{$_SESSION["nome_usuario"]}', '{$dados['descricao']}', '{$dados['conteudo']}', '{$dados['categoria']}')";
  }

  mysqli_query($conn, $comando);

  return header("location: ../pages/artigos.php");

?>