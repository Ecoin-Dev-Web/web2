<?php 
$bg = (isset($_POST['bg']))?$_POST['bg']:"red" ;
$mybg = (isset($_COOKIE['color']))?$_COOKIE['color']:$bg;


setcookie('color',$bg,time()+60);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet" >

	<link rel="stylesheet" href="css/mode.css">
</head>
<body class="<?php  echo $mybg ?>">
	

<div class="container">
	<div class="row p-5 bg-light">
		<form action="" method="post">
	<input type="hidden" name="bg" value="blue">
				<button type="submit" id="blue" class="btn btn-primary">blue</button>
		</form>
	
		<form  action="" method="post">
			<input type="hidden" name="bg" value="red">
			<button type="submit" id="red" class="btn btn-danger">Red</button>
		</form>
			
	</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" ></script>

<!-- <script src="js/mode.js"></script> -->
</body>
</html>