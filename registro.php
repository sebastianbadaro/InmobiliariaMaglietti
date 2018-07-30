<!DOCTYPE html>

<?php
require_once('functions.php') ;
require_once('clases/user.php');
require_once('clases/users.php');

if (estaLogueado()) {
		header('location: index.php');
		exit;	}

$usuarios = Users::getAll();
var_dump($usuarios);

$usuario = new User("","","","","","");
$confirmPassword='';
$errors=[];


if($_POST){

	 $usuario = new User('',trim($_POST['first_name']),trim($_POST['last_name']),trim($_POST['email']),trim($_POST['password']),'1');
   $confirmPassword=trim($_POST['password_confirmation']);
   $errors = $usuario->validateInformation($confirmPassword);

   if (empty($errors)) {
      $usuario->save();
     header('location: login.php');
     exit;
   }

var_dump($confirmPassword);
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

    <title>REGISTER</title>
  </head>
  <body>

<?php include("nav.php") ?>


<div class="">

<div class="d-flex justify-content-around align-items-center register-container">
  <div class="col-11 col-sm-8 col-md-6  grey-area align-items-center ">
  <form role="form" method="post" enctype="multipart/form-data">
    <h2>Please Sign Up <small>It's free and always will be.</small></h2>
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

    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 ">



        <div class="form-group">
											<label for="first_name">First Name</label>
                      <input type="text" value="<?=$usuario->getFirstName();?>" name="first_name" id="first_name" class="form-control input-lg" placeholder="John" tabindex="1">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
						<label for="last_name">Last Name</label>
          <input type="text" name="last_name" value="<?=$usuario->getLastName();?>" id="last_name" class="form-control input-lg" placeholder="Doe" tabindex="2">
        </div>
      </div>
    </div>
    <!-- <div class="form-group">
				<label for="display_name">Username</label>
      <input type="text" name="display_name" value="<?=$usuario->getId();?>" id="display_name" class="form-control input-lg" placeholder="Johnny" tabindex="3">
    </div> -->
    <div class="form-group">
				<label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?=$usuario->getEmail();?>"class="form-control input-lg" placeholder="john.doe@email.com" tabindex="4">
    </div>





    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
						<label for="password">Password</label>
          <input type="password" name="password" value="<?=$usuario->getPassword();?>"id="password" class="form-control input-lg" placeholder="********" tabindex="6">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="form-group">
					<label for="password_confirmation">Password confirmation</label>
          <input type="password" name="password_confirmation" value="<?=$confirmPassword;?>" id="password_confirmation" class="form-control input-lg" placeholder="********" tabindex="6">
        </div>
      </div>
    </div>
    <div class="row">

      <div class="col-xs-8 col-sm-9 col-md-9">
         By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
      </div>
    </div>

    <hr class="colorgraph">
    <div class="row">
      <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
      <div class="col-xs-12 col-md-6"><a href="login.php" class="btn-block btn-lg"> or Sign In</a></div>
    </div>
  </form>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
    </div>
    <div class="modal-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>


</form>

<?php include("footer.php") ?>

  </body>

</html>
