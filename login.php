<?php 
session_start();
const USER="admin@admin.com";
const PASS="123456";

$u = (isset($_POST['email']))?$_POST['email']:NULL;
$p = (isset($_POST['password']))?$_POST['password']:NULL;
$check = (isset($_POST['send']))?$_POST['send']:NULL;
if ($check=="ok") {
		if ($u==USER && $p == PASS) {
		$_SESSION["login"]= md5($u); 
		header('Location:admin.php');

		}else{
			echo '<h1>Error</h1>';
		}
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

	<form method="post" action="">
		<fieldset class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control" id="email" >
		</fieldset>
		<fieldset class="form-group">
<label for="password"> password</label>
<input type="password" name="password" class="form-control" id="password" >
		</fieldset>

  <input type="hidden" name="send" value="ok">
		<button type="submit" class="btn btn-primary btn-lg">Login</button>
	</form>
</body>
</html>