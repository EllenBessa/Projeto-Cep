<?php

  include_once("./conexao.php");

  $id_comentario = $_GET["id"];
  $id_artigo = $_GET["id_artigo"];
  
  $comando = "DELETE FROM comentarios WHERE id = {$id_comentario}";

  mysqli_query($conn, $comando);

  header("location: ../pages/visualizacao.php?id=".$id_artigo);
?>