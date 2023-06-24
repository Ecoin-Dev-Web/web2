<?php 
$ck = (isset($_COOKIE["ecoin"]))?$_COOKIE["ecoin"]:null;

if(!$ck)
setcookie("ecoin","web",time()+60);
else {
	echo $_COOKIE["ecoin"];
}




 ?>