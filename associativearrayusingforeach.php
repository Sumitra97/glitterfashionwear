<?php
echo "<pre>"; 

$array=[
		['11','12','13'],
		['21','22','23'],
		['31','32','33']
];
print_r($array);
foreach ($array as $key => $arr) {
	echo "<strong>$key</strong><br/>";

	foreach ($arr as $index => $value) {
		echo "$index => $value <br/>";
	}
	# code...
}
die;


$students=[
[
	'name'		=>	"Ram",
	'age'		=>	30,
	'college'	=>	"sxc"
],

[
	'name'		=>	"Ram",
	'age'		=>	30,
	'college'	=>	"sxc"
],


[
	'name'		=>	"Ram",
	'age'		=>	30,
	'college'	=>	"sxc"
],

[
	'name'		=>	"Ram",
	'age'		=>	30,
	'college'	=>	"sxc"
]

];

//table

//. kina rakheko?

echo "<table width='300px' border='1' cellpadding='0'>";
echo "<tr><th>Name</th><th>NAge</th><th>College</th></tr>";
//var_dump($students);

foreach ($students as $student) {

	echo '<tr>';
	foreach ($student as $key => $value) {

		echo "<td>$key=$value</td>";
	}
	
	
echo '</tr>';

	}

echo "</table>";
die;










$array=[
		['11','12','13'],
		['21','22','23'],
		['31','32','33']
];
print_r($array);
die;


$student=[
'name'		=>	"Ram",
'age'		=>	30,
'college'	=>	"sxc",
'father'	=> "Hari Sharma",
'agshdh',
];

echo ucfirst("Ram Sharma");

foreach ($student as $key => $value) {
	echo ucfirst($key) . "= $value <br>";
	
}

die;

//yo kina mildaina

for($i=0; $i< count($student) ; $i++){

	echo "{$student[$i]}<br>";

}







?>
