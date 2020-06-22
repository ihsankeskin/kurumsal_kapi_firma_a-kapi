<?php 

try {

	$bag = new PDO("mysql:host=localhost; dbname=akapi; charset=utf8","root","");
	
} catch (PDOException $e) {
	
	echo $e->GetMessage();
}









?>