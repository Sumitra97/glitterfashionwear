<?php
echo "<pre>";
echo count ($_FILES['photos']['tmp_name']);
print_r($_FILES);

die;

?>


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



