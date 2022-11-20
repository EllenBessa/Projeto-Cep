<?php

  session_start();
  include_once("conexao.php");

  $idArtigo = $_GET["idArtigo"];
  $comentario = $_POST["comentario"];

  $comando = "INSERT INTO comentarios (`conteudo`, `id_usuario`, `id_artigo`) VALUES ('{$comentario}', '{$_SESSION["id"]}', '{$idArtigo}')";

  mysqli_query($conn, $comando);

  header("location: ../pages/visualizacao.php?id={$idArtigo}");

?>