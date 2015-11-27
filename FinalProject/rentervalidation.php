<?php
if(!isset($_SESSION)){
    session_start();
}
	require_once('databaseconn.php');
	$username=$_SESSION['username'];
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$phone_number=$_SESSION['phone'];
	$error_message = "";      

	if(($username==null) or($fname==null) or ($lname==null) or ($phone_number==null)){
		$error_message=$error_message."Required fields can not be empty. Fields with * are required fields.<br>";
	}
	

	if(strlen($fname)>100){
		$error_message = $error_message."First name can not be longer than 100 character.<br>";
	}
	if(strlen($lname)>100){
		$error_message = $error_message."Last name can not be longer than 100 character.<br>";
	}
	
	if (($phone_number!=null) and (strlen($phone_number)!=10)){
		$error_message = $error_message."Please enter a valid phone number.<br>";
	}
	if($error_message!=null){
		include "renter.php";
		exit();	
	}
	
	//Inserting the new user detail in database
	$query="select * from renter where user_id='".$username."';";
	
	$stmt=$db->prepare($query);
	$stmt->execute();	
	$result=$stmt->fetch();
	if($result!=null){
	$error_message=$error_message."User already exists .";
		include "home.php";
		exit();
	}
	
	
	$newuserquery="insert into renter values('".$username."','".$fname."','".$lname."','".$phone_number."',null,null,null,null,null,null, null);";
	$affectedrows=$db->exec($newuserquery);
	$affectedrows=$db->exec("commit;");
	include "home.php";
	exit();

?>