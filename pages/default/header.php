<?php

include_once("../services/verifica_login.php");

?>

<nav class="z-depth-0">
  <div class="nav-wrapper deep-purple accent-3">
    <div class="container">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

      <a href="./artigos.php" class="brand-logo texto-menu">
        Connected Study
      </a>

      <div class="logo-container">
        <a href="./artigos.php">
          <img src="../assets/logo-menu.png" class="logo-menu" alt="Logo" width="55" heigth="60">
        </a>
      </div>


      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <a href="./perfil.php" style="height: 65px">
            <img src="<?= $_SESSION['avatar'] ?>" alt="" class="circle avatar-menu"
              onerror="this.onerror=null;this.src='../assets/avatar.png';" />
          </a>
        </li>
        <li>
          <a href="./meus_artigos.php">
            Meus Artigos
          </a>
        </li>
        <li>
          <a href="./artigos.php">
            Artigos
          </a>
        </li>
        <li>
          <a href="../services/logout.php">
            <i class="material-icons">
              exit_to_app
            </i>
          </a>
        </li>

      </ul>

      <ul class="sidenav" id="mobile-demo">
        <div class="center">
          <img src="../assets/logo.png" alt="" class="menu-logo-mobile" />
        </div>

        <li><a href="./perfil.php"><i class="material-icons">account_circle</i> Perfil</a></li>
        <li><a href="./artigos.php"><i class="material-icons">library_books</i> Artigos</a></li>
        <li><a href="./meus_artigos.php"><i class="material-icons">note</i> Meus Artigos</a></li>
        <li><a href="../services/logout.php"><i class="material-icons">exit_to_app</i> Sair</a></li>
      </ul>
    </div>

  </div>
</nav>
<script src="../js/jquery.js"></script>
<script>
$(document).ready(() => {
  $(".sidenav").sidenav();
});
</script>