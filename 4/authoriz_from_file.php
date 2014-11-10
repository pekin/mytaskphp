<?php
#authorization from a file
function open_file(){
	$f = fopen('file.txt', 'r');
	while (!feof($f)) 
	{
		$a = fgets($f);
		return $a;
	}
	fclose($f);
}

open_file();
$mas = explode(",", open_file());
$user = trim($mas['0']);
$pass = trim($mas['1']);
?>
