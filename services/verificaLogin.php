<?php

  session_start();

  if($_SESSION["logado"] != TRUE){
    return header("location: ../pages/login.php");
  }

  return;

?>