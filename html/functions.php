<?php

function validar_form($data){

  $firstName=trim($data['first_name']);
  $lastName=trim($data['last_name']);
  $email=trim($data['email']);
  $displayName=trim($data['display_name']);
  $password=trim($data['password']);
  $confirmPassword=trim($data['password_confirmation']);
  $errors=[];

  if($firstName == ""){
    $errors[]="First name can't be empty.";
  }
  if($lastName == ""){
    $errors[]="Last name can't be empty.";
  }if($displayName == ""){
    $errors[]="Dislpay name can't be empty.";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[]= "Invalid email format.";
  }
  if($password == "" || $confirmPassword ==""){
  $errors[]="Complete both passwords.";
  }elseif ($password !=$confirmPassword) {
  $errors[]="Both passwords must match.";
  }elseif (strlen($password)<8) {
   $errors[]="Password must have at least 8 characters.";
  }else {

  }
 return $errors;
}


function crearUsuario($data){

$usuario = [
  'id'=> traerUltimoID(),
  'firstName'=>trim($data['first_name']),
  'lastName'=>trim($data['last_name']),
  'email'=>trim($data['email']),
  'displayName'=>trim($data['display_name']),
  'password'=>password_hash(trim($data['password']),PASSWORD_DEFAULT)

];
return $usuario;
}


function guardarUsuario ($datos){
    $usuarioJSON = json_encode($datos);
    file_put_contents("usuarios.json", $usuarioJSON . PHP_EOL, FILE_APPEND);

  }

  function traerUltimoID(){
      $usuarios = traerRegistros();

        if (count($usuarios) == 0){
         return 0;
        }

        $elUltimo = array_pop($usuarios);

        $id = $elUltimo['id'];
        return $id + 1;
      }

      function traerRegistros() {

      $registrosJson = file_get_contents('usuarios.json', true);
      $usuariosDatos = explode(PHP_EOL, $registrosJson);
       array_pop($usuariosDatos);
       $todosDatos = [];

       foreach ($usuariosDatos as $usuario){
       $todosDatos[] = json_decode($usuario, true);
       }
       return $todosDatos;
     }

 ?>
