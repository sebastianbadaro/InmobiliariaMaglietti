
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
    <?php include("header.html") ?>
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
