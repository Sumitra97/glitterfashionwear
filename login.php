<?php
session_start();
setcookie("last_visit" , time());
$lastvisittime=$_COOKIE['last_visit'];
	if(isset($_COOKIES['last_visit']))
	{
		$lastvisittime = $_COOKIE['last_visit'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form handling in php</title>
</head>
<body>
<div class="container">

	<h1> Student </h1>
	<div>
		<?php
		
		if(issset($_COOKIE[''])){
			echp "you have visited at Y-m-d ', $_COOKIE['last_visit"
		}
		echo "youfehduv y--d: 
		echo "yojfv
		y-m-d ks"


	</div>
	<div style="color:red">
		<?php 
		if(isset($_SESSION['error']))
			{
				echo $_SESSION['error']; 
				unset($_SESSION['error']);
			}
			?>

	</div>
	<form action="checklogin.php" method="post">
		<div class="row">
			<div class="col-md-4">
				<label>Username :</label>
			</div>

			<div class="col-md-8">
			
				<input required type="text" name="username">
			</div>
		</div>




<div class="row">
			<div class="col-md-4">
				<label>password</label>
			</div>

			<div class="col-md-8">
				
				<input required type="password" name="password">
			</div>
		</div>


<div class="row">
	<div class="col-md-12 text-center">
		<button class="btn btn-primary "> Login </button>


		</div>
	</div>
	</form>


</body>
</html>