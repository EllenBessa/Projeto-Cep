<?php

  $consulta = "SELECT * FROM artigos WHERE publico = TRUE";

  $result = mysqli_query($conn, $consulta); 

?>