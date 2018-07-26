<?php

if(estaLogueado())
{$displayName =   $_SESSION['displayName'];}
 ?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark my-navbar">

<a href="index.php">  <img src="images/e-commerce.png" alt="COOL E-Commerce" class="icon-ecommerce" href="index.php"></a>

      <a class="navbar-brand titulo" href="index.php">Inmobiliaria Maglietti</a>
    <button class="navbar-toggler my-toggle-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="my-menu"></span>
      <span class="ion-navicon-round my-menu"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">ABOUT<span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="faq.php">FAQ <span class="sr-only"></span></a>
        </li>

          <?php if(!estaLogueado()) : ?>
          <li class="nav-item active">

           <a class="nav-link" href="login.php">LOG IN <span class="sr-only"></span></a>
          </li>



        <li class="nav-item active">
         <a class="nav-link" href="registro.php">REGISTER <span class="sr-only"></span></a>
        </li>

        <?php else: ?>
          <!-- <a class="nav-link" > OUT <span class="sr-only"></span></a> -->
              <li>  <a href="#"> <img src="images/user.png" class="tata" alt=""></li></a>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <?=$displayName;?>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="logout.php">LOG OUT</a>
                  <!-- <a class="dropdown-item" href="#">Another action</a> -->
                  <div class="dropdown-divider"></div>
                  <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                </div>
              </li>

        <?php endif; ?>

      </ul>

    </div>
  </nav>
