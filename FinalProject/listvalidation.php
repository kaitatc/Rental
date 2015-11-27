<?php
if(!isset($_SESSION)){
	session_start();
}
	
	require_once('databaseconn.php');
	$fname=$_SESSION['fname'];
	$lname=$_SESSION['lname'];
	$phone_number=$_SESSION['phone'];
	$address=$_SESSION['address'];
	$city=$_SESSION['city'];
	$state=$_SESSION['state'];
	$monthly_rent=$_SESSION['monthly_rent'];
	$bedroom=$_SESSION['bedroom'];
	$bathroom=$_SESSION['bathroom'];
	$pets=$_SESSION['pets'];
	$showing_date=$_SESSION['showing_date'];
	$notes=$_SESSION['notes'];
	$listed_address=$_SESSION['listed_address'];
	$location=$_SESSION['location'];
	$property_for=$_SESSION['property_for'];
	$date_available=$_SESSION['date_available'];
	$area_foot=$_SESSION['area_foot'];
	$neighborhood=$_SESSION['neighborhood'];
	$price=$_SESSION['price'];
	$error_message = "";
	
	$today=date('Y-m-d');
	/*if($showing_date<$today)
		{
			$error_message = $error_message.'Please enter a valid  showing date';
			echo "2";
	
		include"list.php";
			exit();
		}*/
		
    if(($username==null) or($fname==null) or ($lname==null) or ($phone_number==null) or ($address==null) or ($listed_address==null)  or ($location==null)  or ($date_available==null) or ($property_for==null)){
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
	if(strlen($location)>100){
		$error_message = $error_message."Location can not be longer than 100 character.<br>";
	}
	if(strlen($address)>200){
		$error_message = $error_message."Address can not be longer than 100 character.<br>";
	}
	if(strlen($listed_address)>200){
		$error_message = $error_message."Address can not be longer than 100 character.<br>";
	}
	/*if($showing_date<date('Y-m-d')){
		$error_message = $error_message."Please give a valid showing date";
	}*/
	
	if($error_message!=null){
		echo "Please enter valid data.";
		include "list.php";
		exit();
	}
	
	$newuserquery="insert into landlord  values('".$_SESSION['loginusername']."','".$fname."','".$lname."','".$phone_number."','".$address."','".$city."','".$state."');";
	echo $newuserquery;
	$affectedrows=$db->exec($newuserquery);
	
$newuserquery="insert into property values(null,null,'".$property_for."','".$location."','".$area_foot."','".$neighborhood."','".$bedroom."','".$bathroom."','".$price."','".$date_available."',null,null,null,'".$showing_date."','".$listed_address."','".$_SESSION['loginusername']."');";
echo $newuserquery;
$affectedrows=$db->exec($newuserquery);
$affectedrows=$db->exec("commit;");
echo "Successful";
include "home.php";
exit();

?>