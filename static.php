<?php

class Student{

private static $AGE=20;
const _AGE_LIMIT = 18;
public static function printHello(){
	echo "The age is:" .self::$AGE ;
}

public static function checkAgeValidation($AGE){
	if($AGE < self :: _AGE_LIMIT )
	{
		echo "Not Eligible";
	}
	else 
		{echo "Elogoble" ;
}

}

Student :: checkAgeValidation(17);
?>

