<?php
	require_once('databaseconn.php');
	$emailid=$_SESSION['emailid'];
	$username=$_SESSION['username'];
	$password=$_SESSION['password'];
	$cpassword=$_SESSION['cpassword'];	
	$radio=    $_SESSION['radio'];
	$error_message = "";      
	
	if(($emailid==null) or($username==null) or ($password==null) or ($cpassword==null)){
		$error_message=$error_message."Required fields can not be empty. Fields with * are required fields.<br>";
	}
	
	if($error_message!=null){
		include "signup.php";
		exit();
	}
	if(strlen($emailid)>100){
		$error_message = $error_message."Email ID can not be longer than 100 character.<br>";
	}
	
	if((strlen($password)<8) or (strlen($password)>20)){
		$error_message = $error_message."Password has to be between 8 to 20 characters.<br>";
	}else if ($cpassword!=$password){
		$error_message = $error_message."Passwords do not match.<br>";
	}
	
	
	if($error_message!=null){
		echo "User ID or password already exists.";
		include "signup.php";
		exit();
	}
	
	
	//Inserting the new user detail in database
	$query="select * from user where (user_id='".$username."' or user_email='".$emailid."');";
	$stmt=$db->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch();
	if($result!=null){
		$error_message=$error_message."Username or email ID exists already.";
		include "signup.php";
		exit();
	}
	
	
	$newuserquery="insert into user values('".$username."','".$emailid."','".$password."','".$radio."');";

	$affectedrows=$db->exec($newuserquery);
	$affectedrows=$db->exec("commit;");
	
	
	if ($radio=='landlord'){
		include "list.php";
		exit();
	}else{
		include "renter.php";
	}
	exit();
	
?>