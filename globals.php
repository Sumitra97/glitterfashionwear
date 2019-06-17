<?php

$name="Ram";
$age= 23;
$_GET['something'] = 'something';

if(isset($GLOBALS['name'])){
echo $GLOBALS['name'];
}
print_r($GLOBALS);
die;
?>