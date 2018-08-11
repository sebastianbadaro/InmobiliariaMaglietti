<?php

require_once("product.php");
require_once("productImages.php");
require_once("productImage.php");


class Products
{
  public static $total;
  public static $allProducts;

  public static function getAllProducts(){
    return self::getAll("SELECT * FROM product_view");
  }

  public static function getAllProductsByType($typeId){
    return self::getAll("SELECT * FROM product_view where typeId = '{$typeId}'");
  }




  public static function getProductById($productId){
    include("dbConnection.php");
    if(self::productExists($productId)){

      $CadenaDeBusqueda = "select * from product_view where id = '{$productId}'";
      $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
      $ConsultaALaBase->execute();
      $UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC);
      $productImages = ProductImages::getImagesByProductId($UnRegistro['id']);
      $aProduct = new Product($UnRegistro['id'],$UnRegistro['title'],$UnRegistro['type'],
                                $UnRegistro['numberOfRooms'],$UnRegistro['numberOfBathrooms'],$UnRegistro['numberOfParkingSpaces'],$UnRegistro['totalSurface'],$UnRegistro['coveredSurface'],
                               $UnRegistro['address'],$UnRegistro['city'],$UnRegistro['currency'],$UnRegistro['value'],$UnRegistro['description'],$UnRegistro['category'],$productImages);


    }else {
      $aProduct=false;
    }
    return $aProduct;
  }

  public static function productExists($productId){
    include("dbConnection.php");
    $sql = "select count(*) from product_view where id = '{$productId}'";
    $result = $db->query($sql);
    $existe = 0;
    foreach ($result as $row) {
      $existe = $row[0];
    }
    return $existe;
  }

  private static function getAll($CadenaDeBusqueda)
  {
    if(!isset(self::$allProducts)){

    include("dbConnection.php");//     Kevin: No lo pude hacer andar en otro lado

          // $CadenaDeBusqueda = "SELECT * FROM product_view";
          $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
          $ConsultaALaBase->execute();

          $ProductosADevolver=[];
    //Recorro cada registro que obtuve
           while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {
            $productImages = ProductImages::getImagesByProductId($UnRegistro['id']);
             //Instancio un objeto de tipo Usuario
            $UnProduct = new Product($UnRegistro['id'],$UnRegistro['title'],$UnRegistro['type'],
                                      $UnRegistro['numberOfRooms'],$UnRegistro['numberOfBathrooms'],$UnRegistro['numberOfParkingSpaces'],$UnRegistro['totalSurface'],$UnRegistro['coveredSurface'],
                                     $UnRegistro['address'],$UnRegistro['city'],$UnRegistro['currency'],$UnRegistro['value'],$UnRegistro['description'],$UnRegistro['category'],$productImages);

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
