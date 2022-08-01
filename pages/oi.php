<!DOCTYPE html>
<html>
<head>
    <title>Enable/Disable a HTML button</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"> </script>
</head>

<body>
<div class="row">

<div class="navbar-fixed">
  <nav>
          <div class="nav-wrapper grey darken-1">
              <a href="#!" class="brand-logo">Eduardo Moya Simões</a>
              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                  <li><a href="">Início</a></li>
                  <li><a href="">Habilidades</a></li>
                  <li><a href="">Portifólio</a></li>
                  <li><a href="">Currículo</a></li>
                  <li><a href="">Contato</a></li>
              </ul>
              <ul class="side-nav" id="mobile-demo">
                  <li><a href="">Início</a></li>
                  <li><a href="">Habilidades</a></li>
                  <li><a href="">Portifólio</a></li>
                  <li><a href="">Currículo</a></li>
                  <li><a href="">Contato</a></li>
              </ul>
          </div>
  </nav>
</div>
 <script src="js/jquery-3.1.1.js"></script>
 <script src="js/materialize.min.js" ></script>
 <script type="text/javascript">
    $(document).ready(function(){
    $('.parallax').parallax();
  });
 </script>
 <script>
   $( document ).ready(function(){
   $(".button-collapse").sideNav();
 })
</script>
<script src="js/jquery-3.1.1.js"></script>
 <script src="js/materialize.min.js" ></script>
 <script type="text/javascript">
</body>

</html>