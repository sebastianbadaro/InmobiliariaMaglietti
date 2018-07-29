<?php
$dns='mysql:host=localhost;dbname=InmobiliariaMaglietti;port=3306';
$db_user = 'root';
$db_pass = '36203064s';
try {
$db = new PDO($dns, $db_user,$db_pass);
//var_dump($db);

} catch (Exception $e) {
      //  echo $e->getMessage();
}

 ?>
