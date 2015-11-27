<?php
	$dbaname="rental_database";
	$username="root";
	$password="";
	try{
		$db=new PDO("mysql:host=localhost;dbname=$dbaname",$username,$password);
	   }
	catch(PDOException $error){
		echo $error;
	   }
?>