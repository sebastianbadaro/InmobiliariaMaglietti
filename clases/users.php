<?php
require_once("user.php");


Class Users{

public static $total;
public static $allUsers;


public static function getUserByEmail($email){
include("dbConnection.php");
if(self::emailExists($email)){

  $CadenaDeBusqueda = "select * from InmobiliariaMaglietti.users where email = '{$email}'";
  $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
  $ConsultaALaBase->execute();

  $UsersADevolver=[];
//Recorro cada registro que obtuve
   $UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC);

     //Instancio un objeto de tipo Usuario
    $UnUser = new User($UnRegistro['id'], $UnRegistro['firstName'],$UnRegistro['lastName'],$UnRegistro['email'],$UnRegistro['password'],$UnRegistro['rol']);


}else {
$UnUser=false;
}




return $UnUser;
}

public static function emailExists($email){
include("dbConnection.php");
$sql = "select count(*) from InmobiliariaMaglietti.users where email = '{$email}'";
$result = $db->query($sql);
$existe = 0;
foreach ($result as $row) {
$existe = $row[0];
}
return $existe;
}

public static function getAll(){

  if(!isset(self::$allUsers)){

  include("dbConnection.php");//     Kevin: No lo pude hacer andar en otro lado

        $CadenaDeBusqueda = "SELECT * FROM InmobiliariaMaglietti.users";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        $UsersADevolver=[];
  //Recorro cada registro que obtuve
         while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {

           //Instancio un objeto de tipo Usuario
          $UnUser = new User($UnRegistro['id'], $UnRegistro['firstName'],$UnRegistro['lastName'],$UnRegistro['email'],$UnRegistro['password'],$UnRegistro['rol']);

          //Agrego el objeto Usuaio al array
          $UsersADevolver[] = $UnUser;
         }
         self::$total=count($UsersADevolver);
         self::$allUsers=$UsersADevolver;
      }else{

        $UsersADevolver= self::$allUsers;
      }
      return $UsersADevolver;


}

}



 ?>
