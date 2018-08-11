
<?php
require_once('functions.php') ;
require_once('clases/products.php') ;
require_once('clases/product.php') ;
require_once('clases/productImage.php') ;
require_once('clases/productImages.php') ;
$products=[];
$title = "Ultimos inmbuebles";
if(!$_GET){
$products = Products::getAllProducts();
}elseif (isset($_GET['typeId'])) {
  $products = Products::getAllProductsByType($_GET['typeId']);

}

// $images = ProductImages::getImagesByProductId(1);

 // var_dump($products[0]->getImages());
 ?>

<!DOCTYPE html>
<html>
  <head>
    <?php include("header.html") ?>
    <title>HOME</title>
  </head>
  <body>
    <?php include("nav.php") ?>
<div class="container">




<!-- <section class="profile-section">

    <img src="images/e-commerce.png"  class="profile-image" >
    <h1>Inmobiliaria Maglietti</h1>
    <ion-icon name="twitter"></ion-icon>
    <p class="nice-family">The place to find your next home...</p>
</section> -->

<section class="popular-items ">

<div class="login-div">


<h3 class="main-title">Ultimos inmbuebles</h3>

<!-- <div class="row align-items-center  justify-content-around">


</div> -->

<div class="row ">
  <?php foreach ($products as $product): ?>
    <div class="col-lg-3 col-md-4 col-sm-6 padding-top-30">
         <div href="#" class="thumbnail img-thumb-bg"  style ="background-image: url(images/productImages/<?=$product->getImages()[0]->getName()?>)">
           <!-- style ="background-image: url(images/cabin.png)"  -->
             <div class="overlay"></div>
             <div class="caption">
                 <div class="tag ">
                   <a class="<?=$product->getType()?>"href="#"><?=$product->getType()?></a>
                   <a class="<?=$product->getCategory()?>" href="#"><?=$product->getCategory()?></a>
                 </div>
                 <div class="tag <?=$product->getCategory()?>"></div>
                 <div class="title"><a href="productDetail.php?productId=<?=$product->getId()?>"><?=$product->getAddress()?></a></div>
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
</div>
</section>
</div>
<?php include("footer.php") ?>

  </body>

</html>
