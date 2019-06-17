<?php
echo "<pre>";

$student=[
'name'		=>	"Ram",
'age'		=>	30,
'college'	=>	"sxc",
'Something else goes here',
'father'	=> "Hari Sharma",
'Something goes here again'
];

var_dump($student);
$student['collage']="Ascol";



var_dump($student);
die;

echo $student['age'];



echo"<pre/>";


?>