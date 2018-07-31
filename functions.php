<?php
require_once('clases/user.php');
session_start();
// --var_dump($_SESSION['id']);

// var_dump($_COOKIE);
// var_dump($_SESSION);
// var_dump($_POST);

if (isset($_COOKIE['id'])){
   $_SESSION['id'] = $_COOKIE['id'];
   $_SESSION['displayName'] = $_COOKIE['displayName'];
  }

  function loguear($usuario){
    $_SESSION['id'] = $usuario->getId();
    $_SESSION['displayName'] = $usuario->getFirstName();
  }

  function estaLogueado(){
    return isset($_SESSION['id']);
  }
 ?>
