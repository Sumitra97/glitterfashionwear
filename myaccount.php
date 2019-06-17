<?php
session_start();
if(!isset($_SESSION['is_logged_in'])){
	$_SESSION['error']="please login first.";
	header("Location: login.php");
	die;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container"> <h1>Welcome to student Dashboard </h1>
<div class="row">
	YOy are logged in as <strong><?php echo $_SESSION['username'] ?> </strong> <a href="login.php">Logout </a>

</div>
</div>
</body>
</html>
