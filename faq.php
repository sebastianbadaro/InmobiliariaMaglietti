<?php

require_once('functions.php') ;
require_once('clases/faqs.php');
require_once('clases/faq.php');

$allFaqs = Faqs::getAll();



 ?>


<!DOCTYPE html>
<html>
  <head>
  <?php include("header.html") ?>
    <title>FAQ</title>
  </head>
  <body>

  <?php include("nav.php") ?>

<div class="container container-login">


<section class="faq-section">
  <h1 class="faq-title">F.A.Q</h1>


<?php foreach ($allFaqs as $faq): ?>


<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#<?=$faq->getId();?>" aria-expanded="true" aria-controls="collapseOne">
          <?=$faq->getQuestion();?>
        </button>
      </h5>
    </div>

          <!-- poner show en la class para mostrar de una -->
    <div id="<?=$faq->getId();?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <?=$faq->getAnswer();?>
      </div>
    </div>
  </div>
</div>

<?php endforeach; ?>
</section>
</div>
<?php include("footer.php") ?>

  </body>

</html>
