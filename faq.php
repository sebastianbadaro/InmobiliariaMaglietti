<?php

require_once('functions.php') ;
require_once('clases/faqs.php');
require_once('clases/faq.php');

$allFaqs = Faqs::getAll();



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

    <title>FAQ</title>
  </head>
  <body>

  <?php include("nav.php") ?>

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

<?php include("footer.php") ?>

  </body>

</html>
