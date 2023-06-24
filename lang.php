<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
<?php 
$data = ['fr'=>"Bienvenu" ,'en'=>"Welcom",'ar'=>"مرحبا بكم"];

$lang = (isset($_GET['l']))?$_GET['l']:"fr";
 ?>
<a class="btn btn-primary" href="?l=fr">Franch</a>
<a class="btn btn-primary" href="?l=ar">Arabic</a>
<a class="btn btn-primary" href="?l=en">English</a>


<h3><?php echo $data[$lang] ;     ?></h3>

	
</body>
</html>