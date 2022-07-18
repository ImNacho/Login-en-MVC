<?php
  require_once("controlador/controlador.php");

  if(isset($_GET['m'])):
    if(function_exists($_GET['m'])):
      $_GET['m']();
    endif;
  else:
    index();
  endif;
?>