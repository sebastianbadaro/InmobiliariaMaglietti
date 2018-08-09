
<?php
require_once('functions.php') ;
require_once('clases/products.php') ;
require_once('clases/product.php') ;

$products = Products::getAll();
//var_dump($products);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>HOME</title>
  </head>
  <body>
    <?php include("nav.php") ?>
<div class="container container-login">




<!-- <section class="profile-section">

    <img src="images/e-commerce.png"  class="profile-image" >
    <h1>Inmobiliaria Maglietti</h1>
    <ion-icon name="twitter"></ion-icon>
    <p class="nice-family">The place to find your next home...</p>
</section> -->

<section class="popular-items">


<h3 class="title">Ultimos inmbuebles</h3>

<!-- <div class="row align-items-center  justify-content-around">


</div> -->

<div class="row">
  <?php foreach ($products as $product): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 padding-top-30">
         <div class="thumbnail img-thumb-bg">
             <div class="overlay"></div>
             <div class="caption">
                 <div class="tag ">
                   <a class="<?=$product->getType()?>"href="#"><?=$product->getType()?></a>
                   <a class="<?=$product->getCategory()?>" href="#"><?=$product->getCategory()?></a>
                 </div>
                 <div class="tag <?=$product->getCategory()?>"></div>
                 <div class="title"><a href="#"><?=$product->getAddress()?></a></div>
                 <div class="clearfix">

                     <!-- <span class="meta-data pull-right"><a href=""><i class="fa fa-heart-o"></i> 4</a></span>  -->
                 </div>
                 <div class="content">
                   <span class="meta-data"><?=$product->getCurrency()?></span>
                   <span class="meta-data"><?=$product->getValue()?></span>
                   </div>
                 <div class="content">

                    <span class="meta-data">Ambientes: <?=$product->getNumberOfRooms()?></span>
                    <span class="meta-data">Baños: <?=$product->getNumberOfBathrooms()?></span>
                    <span class="meta-data">Cocheras: <?=$product->getNumberOfparkingSpaces()?></span>
                 </div>
             </div>
         </div>
      </div>
  <?php endforeach; ?>


</div>


<!-- comentario de Marina  Hola Machirulos-->

</section>
</div>
<?php include("footer.php") ?>

  </body>

</html>
