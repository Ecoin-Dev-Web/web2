<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('Location:login.php');
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>

	<h1>Welcom to Admin</h1>
</body>
</html>