<?php
if(!isset($_SESSION)){
    session_start();
}
	require_once('databaseconn.php');
	$editemail = $_SESSION['editemail'];
	//$editpassword = $_SESSION['editpassword'];
	$editproperty = $_SESSION['editproperty'];
	$error_message = "";
	
	if(($editemail==null) or ($editproperty==null)){
		$error_message=$error_message."Required fields can not be empty. Fields with * are required fields.<br>";
	}
	
	if($error_message!=null){
		include "signup.php";
		exit();
	}
	if(strlen($editemail)>100){
		$error_message = $error_message."Email ID can not be longer than 100 character.<br>";
	}
	//if((strlen($editpassword)<8) or (strlen($editpassword)>20)){
		//$error_message = $error_message."Password has to be between 8 to 20 characters.<br>";
		/*}else if ($cpassword!=$password){
		$error_message = $error_message."Passwords do not match.<br>";
	}
	
	/*if(($editfname==null) or ($editlname==null)){
		$error_message=$error_message."First name and Last name are mandatory.<br>";
	}
	if(strlen($editfname)>100){
		$error_message = $error_message."First name can not be longer than 100 character.<br>";
	}
	if(strlen($editlname)>100){
		$error_message = $error_message."Last name can not be longer than 100 character.<br>";
	}
	/*if (($editphonenumber!=null) and (strlen($editphonenumber)!=10)){
		$error_message = $error_message."Please enter a valid phone number.<br>";
	}
	if($error_message!=null){
		include "updateprofile.php";
		exit();
	}*/
	//Checking if user email already exists before updating
	$query="select * from user where user_email='".$editemail."' and user_email!='' and user_email !=(select user_email from user 
	where user_id = '".$_SESSION['loginusername']."');";
	$stmt=$db->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch();
	if($result!=null){
		$error_message=$error_message."User email exists already.";
		include "updateprofile.php";
		exit();
	}
	
	$updateprofilequery="update user set user_email='".$editemail."', user_type= '".$editproperty."' 
	where user_id = '".$_SESSION['loginusername']."';";
	$affectedrows=$db->exec($updateprofilequery);
	$affectedrows=$db->exec("commit;");
	/*echo "Your information is successfully updated";*/
	$_SESSION['updatestatus']=1;
	include "home.php";
	exit();	
	session_write_close();
?>