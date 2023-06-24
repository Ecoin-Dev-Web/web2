<?php 
session_start();
session_destroy();
unset($_SESSION['login']);

setcookie("PHPSESSID","",time()-60*60*24);

header('Location:login.php');

 ?>