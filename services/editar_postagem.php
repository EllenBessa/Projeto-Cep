<?php

  session_start();
  include_once("./conexao.php");

  $dadosArtigo = $_POST;

  $publico = $_POST["publico"] == "sim" ? 1 : 0;

  $comando = "UPDATE artigos SET titulo = '{$dadosArtigo['titulo']}', descricao = '{$dadosArtigo['descricao']}', conteudo = '{$dadosArtigo['conteudo']}', categoria = '{$dadosArtigo['categoria']}', publico = '{$publico}', ataulizado_em = now() WHERE id = {$dadosArtigo['id']} ";

  mysqli_query($conn, $comando);

  $destino = "location: ../pages/visualizacao.php?id=" . $dadosArtigo['id'];

  header($destino);
?>