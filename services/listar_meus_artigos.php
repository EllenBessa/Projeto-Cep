<?php

  $consulta = "SELECT * FROM artigos WHERE autor = '{$_SESSION['nome_usuario']}'";

  $result = mysqli_query($conn, $consulta); 
  
?>