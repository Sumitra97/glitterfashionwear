<?php
//echo "<pre>";
print_r($_FILES);

$is_UPloaded =is_uploaded_file($_FILES['photo']['tmp_name']);
$photoallowedTypes = ['iamge/jpeg','image/jpg','image/png'];

if($is_UPloaded === true)
{
	$filename = $_FILES['photo']['name'];
	$type = $_FILES['photo']['type'];

	if(in_array($type, $photoallowedTypes)){

	move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/myphoto.jpg');
	echo 'File was uploaded';

}
else{
	echo 'invalid photo type';
}

die;
?>



print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
die;



$v= '1';
var_dump ((int)$v);
die;

?>


$name=mae;
if(empty($name)){
	echo "Variable is empty";
}
else{
	echo"Not Empty";
}

die;



echo "Name:" . $_POST['first_name'] ." " . $_POST['last_name'] . '<br>';

echo "Gender:" . $_POST['gender'] . '<br>';

echo "Country:" . $_POST['country']  . '<br>';

echo "Skills:" . '<br>';
foreach ($_POST['skills'] as $skill) {
	echo "$skill<br>";
	# code...
}



die;
?>



echo $_GET['get_value'];
echo $_GET['first_name'];
die;
?>


echo "Get data<pre>";
print_r($_GET);
echo "</pre>";


echo "Post data<pre>";

print_r($_POST);
echo "</pre>";

?>