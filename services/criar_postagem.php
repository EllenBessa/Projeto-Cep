<?php

  session_start();
  include_once("./conexao.php");

  $dados = $_POST;

  $dataPublicacao = $dados["publico"] == "sim" ? "now()" : NULL;

  $publico = $dados["publico"] == "sim" ? 1 : 0;

  if ($dados["publico"] == "sim") {
    $comando = "INSERT INTO artigos (`titulo`, `autor`, `descricao`, `conteudo`, `categoria`, `data_publicacao`, `publico`) VALUES ('{$dados['titulo']}', '{$_SESSION["nome_usuario"]}', '{$dados['descricao']}', '{$dados['conteudo']}', '{$dados['categoria']}', {$dataPublicacao}, $publico)";
  } else {
    $comando = "INSERT INTO artigos (`titulo`, `autor`, `descricao`, `conteudo`, `categoria`, `publico`) VALUES ('{$dados['titulo']}', '{$_SESSION["nome_usuario"]}', '{$dados['descricao']}', '{$dados['conteudo']}', '{$dados['categoria']}', $publico)";
  }

  mysqli_query($conn, $comando);

  return header("location: ../pages/meus_artigos.php");

?>