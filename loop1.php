<?php



$fruits=[
'Apple',
'Mango',
'Orange',
'Pineapple'
];




//kasari continue hunxa ya?
foreach ($fruits as $index => $value) {
	if($index ===1){
		continue;
	}
	echo " $index.$value <br>";
}
die;


//kati bela br lekhda . diney kati bela nadine
foreach ($fruits as $index => $value) {
	echo " $index.$value <br>";
}
die;

//use of double quote and sinle quote here check it (mistake)
foreach ($fruits as $value) {
	echo '- $value <br>';
}


for($i=0; $i< count($fruits);$i++)
{
	echo "$fruits[$i].<br>";
}



?>