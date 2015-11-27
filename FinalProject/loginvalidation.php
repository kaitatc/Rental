<?php
if(!isset($_SESSION)){
	session_start();
}

	require_once('databaseconn.php');	
	$loginpassword=$_SESSION['loginpassword'];
	$error_message = "";
	/*echo $_SESSION['loginusername'];*/
	
	if(($_SESSION['loginusername']==null) or ($loginpassword==null) or strlen($_SESSION['loginusername'])>100 or strlen($loginpassword)>100){
		$error_message=$error_message."Please enter a valid username and password.";
		/*echo "1";*/
		include "home.php";
		exit();
	}
	//Verifying login credential
	$query="select * from user where (user_id='".$_SESSION['loginusername']."' and user_password='".$loginpassword."');";
	/*echo $query;*/
	$stmt=$db->prepare($query);
	$stmt->execute();
	$result=$stmt->fetch();
	
	if($result!=null){
		$_SESSION['loginstatus']=1;
		/*echo "2";*/
		include $_SESSION['toloadpage'];
		exit();
	}else {
		$error_message=$error_message."Please enter a valid username and password.";
		/*echo "3";*/
		include "index.php";
		exit();
	}
	
?>