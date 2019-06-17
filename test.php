<?php
$filename = "text.txt";
$target ="logs";
$logname ='php.log';


if(!file_exists($datefilename)){
	mkdir ($datefilename);
}

else{
$datefilename = date('Ymd') . " .log";
echo $datefilename;

}
die;

if(!file_exists($target)){
	echo "$target was created";
	mkdir($target);

}
if(copy($filename, "$target/$filename")){
	echo "filename is copied";
}
else{
	echo "there was a problem creating file";
}

die;

$filehandle= fopen($logname, 'a+');
fwrite($filehandle, "something\n\n");
fclose($filehandle);

die;

if(!file_exists($filename)){
	touch($filename);
}
$googleContents=file_get_contents('http://www.google.com');
file_put_contents('$googlecontent.txt',$googleContents);

die;
?>

$currentdir = dirname(--FILE--);
echo $currentdir;
touch ($currentdir/myfiles.log);

die;
?>


//unlink("$filename");
//die;

if(file_exists($filename)){
	echo "File/Directory  Exists";

}
else{
	mkdir($directory);
	echo "Directory did not exist so creadted";
//}
