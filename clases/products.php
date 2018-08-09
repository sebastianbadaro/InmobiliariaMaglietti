<?php

require_once("product.php");


class Products
{
  public static $total;
  public static $allProducts;

  public static function getAll()
  {
    if(!isset(self::$allProducts)){

    include("dbConnection.php");//     Kevin: No lo pude hacer andar en otro lado

          $CadenaDeBusqueda = "SELECT * FROM product_view";
          $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
          $ConsultaALaBase->execute();

          $ProductosADevolver=[];
    //Recorro cada registro que obtuve
           while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {

             //Instancio un objeto de tipo Usuario
            $UnProduct = new Product($UnRegistro['id'],$UnRegistro['title'],$UnRegistro['type'],
            $UnRegistro['numberOfRooms'],$UnRegistro['numberOfBathrooms'],$UnRegistro['numberOfParkingSpaces'],$UnRegistro['totalSurface'],$UnRegistro['coveredSurface'],
            $UnRegistro['address'],$UnRegistro['city'],$UnRegistro['currency'],$UnRegistro['value'],$UnRegistro['description'],$UnRegistro['category']);

            //Agrego el objeto Usuaio al array
              $ProductosADevolver[] = $UnProduct;
           }
           self::$total=count($ProductosADevolver);
           self::$allProducts=  $ProductosADevolver;
        }else{

          $ProductosADevolver= self::$allProducts;
        }
        return $ProductosADevolver;



  }
}

 ?>
