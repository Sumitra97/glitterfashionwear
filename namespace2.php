<?php

function __autoload($classname) {
	echo $classname;
	die;
	$classnames = str_replace('\\','/',$classname); 

	$classFname = '$classnames .php'

	if(file_exists($classFnames)){
		include $classname;
	}
};


$objBroadwayDb = new Broadway\DbConnection;
$objBroadwayDb -> connect();

echo  "<hr>";

$objNepalDb = new Nepal\DbConnection;
$objNepalDb -> connect();
?>