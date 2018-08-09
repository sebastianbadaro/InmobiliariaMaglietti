<!DOCTYPE html>

<?php
require_once('functions.php') ;
require_once('clases/user.php') ;

if (estaLogueado()) {
		header('location: index.php');
		exit;	}

$usuario = new User('','','','','','');
$errors=[];


if($_POST){
//var_dump($_POST);
	$usuario = new User('','','',trim($_POST['email']),'','');

	$providedPassword=trim($_POST['password']);
  $errors=$usuario->validateLogin($providedPassword);

if(empty($errors)){

   loguear($usuario);
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
  <?php include("header.html") ?>
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
							<label for="email">Email</label>
            <input type="email" id="email" name="email"class="form-control input-sm chat-input" placeholder="John.doe@email.com" value="<?=$usuario->getEmail();?>"/>
            </br>
						<label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control input-sm chat-input" placeholder="" value=""/>
            </br>
           <input type="checkbox" name="remember" value="remember"> Remember me<br>
           <a href="#">Forgot your password?</a>
             <hr class="colorgraph">
            <div class="wrapper">
            <span class="group-btn align-items-center">
              <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Sign in" class="btn btn-success btn-block btn-lg" tabindex="7"></div>
                <div class="col-xs-12 col-md-6"><a href="registro.php" class="btn-block btn-lg">or Register</a></div>
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
