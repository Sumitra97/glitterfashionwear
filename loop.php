<?php
//while loop
$counter=1;
while(1){
	$counter++;
	
	if($counter %2 !== 0)
	{
		continue;
	}
	if($counter>100)
	{
		break;
	
	}
	echo "$counter<br>";
	
}


die;
//while loop{
	$counter=1;
	while(1){
		echo "$counter<br>";
		if($counter===100)
			break;
		$counter++;
	}

	die;

//for loop

$i=0;
	do {
echo "$i.Do while<br>";
$i++;
}while($i<=10);


?>