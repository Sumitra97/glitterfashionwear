<?php

//foreach ($_POST as $key => $value) {
//	if(is_array($value)){
//		foreach ($value as $v) {
	//		echo "Skills:";
			//{
////		 	echo "$v,"; 
		 //} 
//////		}

	//}
	////else{
	
//echo "$key => $value<br>";
//}
//}

//die;


$username=$_POST['username'];
$password=$_POST['password'];

if($username ==='ram' && $password === 'sharma'){
	$_SESSION['username'] = $username;
	$_SESSION['is_logged_in']= true;
	header("Location:success.php");
	die;
	
}
else{
	
$_SESSION['error']="login failed";
		header("Location:login.php");
}


?>