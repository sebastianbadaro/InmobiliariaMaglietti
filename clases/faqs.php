<?php
require_once("faq.php");


Class Faqs{

public static $total;
public static $allFaqs;


public static function getAll(){

  if(!isset(self::$allFaqs)){

  include("dbConnection.php");

        $CadenaDeBusqueda = "SELECT * FROM InmobiliariaMaglietti.faqs order by displayOrder";
        $ConsultaALaBase = $db->prepare($CadenaDeBusqueda);
        $ConsultaALaBase->execute();

        $FaqsADevolver=[];
  //Recorro cada registro que obtuve
         while ($UnRegistro = $ConsultaALaBase->fetch(PDO::FETCH_ASSOC)) {

           //Instancio un objeto de tipo Usuario
          $UnFaq = new Faq($UnRegistro['id'], $UnRegistro['displayOrder'],$UnRegistro['question'],$UnRegistro['answer']);

          //Agrego el objeto Usuaio al array
          $FaqsADevolver[] = $UnFaq;
         }
         self::$total=count($FaqsADevolver);
         self::$allFaqs=$FaqsADevolver;
      }else{

        $FaqsADevolver= self::$allFaqs;
      }
      return $FaqsADevolver;


}

}



 ?>
