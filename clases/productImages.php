<?php
/**
 *
 */
class ProductImages
{

  public static function getImagesByProductId($productId){
    include("dbConnection.php");

      $images=[];

      $CadenaDeBusqueda = "select * from InmobiliariaMaglietti.productImages where idProduct = '{$productId}'";
      $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
      $ConsultaALaBase->execute();

      while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {

        //Instancio un objeto de tipo Imagen
       $productImage = new productImage($UnRegistro['idImage'], $UnRegistro['idProduct'],$UnRegistro['name'],$UnRegistro['description'],$UnRegistro['dateCreated']);

       //Agrego el objeto imagen al array
       $images[] = $productImage;
      }


    return $images;
  }
}

 ?>
