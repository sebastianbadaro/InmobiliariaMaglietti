<!DOCTYPE html>

<?php
require_once('functions.php') ;

if (estaLogueado()) {
		header('location: index.php');
		exit;	}

$userName='';
$password='';
$errors=[];


if($_POST){
$userName=trim($_POST['userName']);
$errors=validarLogin($_POST);

if(empty($errors)){
var_dump($_POST);

  loguear($usuario = existeUsuario($userName));
  if (isset($_POST["remember"])) {
	   setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
     setcookie('displayName', $usuario['displayName'], time() + 3600 * 24 * 30);
     }
  		header('location: index.php');
  	exit;
}
}

 ?>
<html>
  <head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>LOGIN</title>
  </head>
  <body>

<?php include("nav.php") ?>

<div class="container-login  d-flex align-items-center justify-content-around">
  <form role="form" method="post" enctype="multipart/form-data">
        <div class="row login-div">
            <div class="form-login">
            <h4>Welcome back.</h4>
              <hr class="colorgraph">
              <?php if($errors) : ?>
              <div class="alert alert-danger" role="alert">
              <ul>
                <?php foreach($errors as $error): ?>

                   <li><?=$error ?></li>

               <?php endforeach; ?>
                </ul>
              </div>
              <?php endif; ?>

            <input type="text" id="userName" name="userName"class="form-control input-sm chat-input" placeholder="Username" value="<?=$userName?>"/>
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="Password" />
            </br>
           <input type="checkbox" name="remember" value="remember"> Remember me<br>
           <a href="#">Forgot your password?</a>
             <hr class="colorgraph">
            <div class="wrapper">
            <span class="group-btn align-items-center">
              <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Sign in" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a href="registro.php" class="btn btn-primary btn-block btn-lg">Register</a></div>
              </div>

            </span>
            </div>
            </div>

        </div>

</form>
</div>

<?php include("footer.php") ?>

  </body>

</html>
