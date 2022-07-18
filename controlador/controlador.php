<?php
  function index(){
    require_once 'modelo/index.php';
    require_once 'vista/index_vista.php';
  }

  function registrar(){
    require_once 'modelo/registrarse.php';
    require_once 'vista/registrarse_vista.php';
  }

  function iniciar_sesion(){
    require 'modelo/iniciar_sesion.php';
    require 'vista/iniciar_sesion_vista.php'; 
  }

  function recuperar(){
    require 'modelo/recuperar.php';
    require 'vista/recuperar_vista.php';
  }

  function salir(){
    require 'modelo/salir.php';
  }

  function activar(){
    require 'modelo/activar.php';
  }

  function nueva_contrasena(){
    require 'modelo/nuevacontrasena.php';
    require 'vista/nuevacontrasena_vista.php';
  }

?>