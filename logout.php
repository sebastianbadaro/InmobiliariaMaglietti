<?php
session_start();
setcookie('id','',time()-10);
setcookie('displayName','',time()-10);
session_destroy();
header('location:index.php');
exit();
 ?>
