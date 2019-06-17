<?php
$msqli = new MYSQLI('localhost','root','','colleges');
 if($mysqli->connect_error){
 	echo "There was  a problem connectiong to the database" ;
 	echo $mysqli-> connect_error;
 	die;
 }

echo "Connected to the database";


?>