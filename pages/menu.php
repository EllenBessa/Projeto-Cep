<?php

  include_once("../services/verifica_login.php");

?>

<nav>
  <div class="nav-wrapper deep-purple accent-3">
    <div class="container">
      <a href="principal.php" class="brand-logo">Connected Study</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <a href="./perfil.php" style="height: 65px">
            <img src="https://www.w3schools.com/howto/img_avatar.png" alt="" class="circle avatar-menu" />
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
    </div>
  </div>
</nav>