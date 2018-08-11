
<?php
require_once('functions.php') ;
require_once('clases/products.php') ;
require_once('clases/product.php') ;
require_once('clases/productImage.php') ;
require_once('clases/productImages.php') ;

// $images = ProductImages::getImagesByProductId(1);

if(isset($_GET['productId'])){

$product = Products::getProductById($_GET['productId']);

}else {
header('location:index.php');
}

$active = "active";
  // var_dump($product);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include("header.html") ?>
    <title>HOME</title>
  </head>
  <body>
    <?php include("nav.php") ?>
<div class="container login-div">


    <div class="row felx">
      <div class="col-md-6 col-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">

      <?php foreach ($product->getImages() as $image): ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <?php endforeach; ?>



    </ol>
    <div class="carousel-inner">
      <?php foreach ($product->getImages() as $image): ?>
        <div class="carousel-item <?=$active;?>">
          <img class="d-block w-100" src="images/productImages/<?=$image->getName();?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class = "black-bg"><?=$image->getTitle();?></h5>
            <p class = "black-bg"><?=$image->getDescription();?></p>
         </div>
        </div>
        <?php
        $active = "";
         ?>
      <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <h1><?=$product->getAddress();?></h1>
        <h4><?=$product->getCurrency();?> <?=$product->getValue();?></h4>
        <h5>Cochera: <?=$product->getNumberOfparkingSpaces();?></h5>
        <h5>Habitaciones: <?=$product->getNumberOfRooms();?></h5>
        <h5>Baños: <?=$product->getNumberOfBathrooms();?></h5>
        <h5>Superficie total: <?=$product->getTotalSurface();?></h5>
        <h5>Superficie cubierta: <?=$product->getCoveredSurfaces();?></h5>
        <h6><?=$product->getDescription();?></h6>
      </div>
    </div>
    <div class="row">
      <div class="col-sm">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.727576757629!2d-58.167992612625!3d-26.18435791262418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x945ca5e0b46c73f5%3A0x19e1babd845003a2!2sJos%C3%A9+Mar%C3%ADa+Uriburu+341%2C+P3600+Formosa!5e0!3m2!1ses!2sar!4v1533950565992" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>



</div>




<?php include("footer.php") ?>

  </body>

</html>
