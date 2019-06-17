<?php

echo "<pre>";

$menus=[
	'something' ."<br>" ,
	$submenus=[

		[
				'name' => 'Home',
				'link' => "./"
		],
		[
				'name' => 'Destination',
				'link' => "./destination.php"
		],
		[
				'name' => 'Pricing',
				'link' => "./pricing.php"
		],
		[
				'name' => 'Contact',
				'link' => "./contact.php"
		],
		[
				'name' => 'About US',
				'link' => "./aboutus.php"
		]
	]


];



foreach($menus as $menu)
{
	if(is_array($menu))
	{
	foreach($menu as $submenus)
	{
		echo  $submenus['name'] . "<br>";
	}
}

else
{
	echo "$menu";

}
}

die;


$students=[
	'Shyam',
	'Hari',
	'Ram',
	'200'
];

$findStudent='Ram';

if(in_array($findStudent,$students,true)){
	echo "$findStudent is enrolled"; 
}
else{
	echo "$findStudent is not enrolled";
}

die;

if(in_array('Shyam',$students )){
	echo" Shyam is enrolled" . "<br>";

}
else{
	echo "doesnt exist";
}

$fruits=[
	'Apple',
	'Orange',
	'Banana',
	'1002',
	'23',
	32,
	'95.99'
];


	echo $fruits[6];

die;

$name="shyam";
if(isset($name)){
	echo "name" . "<br>";
}
	else{
		echo "name does nit exist" ."<br>";
	}

var_dump($fruits);
unset ($fruits[4]);

var_dump($fruits);
die;

echo ($fruits[2]) . "<hr>";


echo "Total elements : " . count($fruits);


echo "<pre>";

echo "jdbch hdbchb  					 dhbjbj dhbc";

echo "<pre/>";
var_dump($fruits);

?>