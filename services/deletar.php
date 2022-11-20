<?php

  include_once("./conexao.php");

  $id = $_GET["id"];

  $comando = "DELETE FROM artigos WHERE id = {$id}";

  mysqli_query($conn, $comando);

  header("location: ../pages/artigos.php");
?>