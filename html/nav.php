<nav class="navbar navbar-expand-md navbar-dark bg-dark my-navbar">

<a href="index.php">  <img src="images/e-commerce.png" alt="COOL E-Commerce" class="icon-ecommerce" href="index.php"></a>

      <a class="navbar-brand titulo" href="index.php">COOL E-Commerce</a>
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
        <li class="nav-item active">
          <?php if(!estaLogueado()) : ?>
          <a class="nav-link" href="login.php">LOG IN <span class="sr-only"></span></a>
        <?php else: ?>
          <a class="nav-link" href="logout.php">LOG OUT <span class="sr-only"></span></a>
        <?php endif; ?>
        </li>
      </ul>

    </div>
  </nav>
