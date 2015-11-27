<?php
if(!isset($_SESSION)){
    session_start();
}
$pagename=$_POST['pagename'];

if($pagename=="signup"){
	$_SESSION['emailid']=$_POST['emailid'];
	$_SESSION['username']=$_POST['username'];
	$_SESSION['password']=$_POST['password'];
	$_SESSION['cpassword']=$_POST['cpassword'];	
	$_SESSION['radio']=$_POST['radio'];
	
		include "signupvalidation.php";
		exit();		
} else if($pagename=="login"){
		$_SESSION['loginusername']=$_POST['loginusername'];		
		$_SESSION['loginpassword']=$_POST['loginpassword'];
		/*echo $_SESSION['loginusername'];*/
		include "loginvalidation.php";
		exit();
} else if ($pagename=="list"){
	$_SESSION['fname']=$_POST['fname'];
	$_SESSION['lname']=$_POST['lname'];
	$_SESSION['phone_number']=$_POST['phone'];
	$_SESSION['address']=$_POST['address'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['state']=$_POST['state'];
	$_SESSION['monthly_rent']=$_POST['monthlyrent'];
	$_SESSION['bedroom']=$_POST['bedroom'];
	$_SESSION['bathroom']=$_POST['bathroom'];
	$_SESSION['pets']=$_POST['pets'];
	$_SESSION['showing_date']=$_POST['showingdate'];
	$_SESSION['notes']=$_POST['notes'];
	$_SESSION['listed_address']=$_POST['listedaddress'];
	$_SESSION['location']=$_POST['location'];
	$_SESSION['property_for']=$_POST['propertyfor'];
	$_SESSION['date_available']=$_POST['dateavailable'];
	$_SESSION['area_foot']=$_POST['areafoot'];
	$_SESSION['neighborhood']=$_POST['neighborhood'];
	$_SESSION['price']=$_POST['price'];
	include "listvalidation.php";
	exit();
}	else if ($pagename=="renter"){
	$_SESSION['username']=$_POST['username'];
	$_SESSION['fname']=$_POST['fname'];
	$_SESSION['lname']=$_POST['lname'];
	$_SESSION['phone']=$_POST['phone'];
		include "rentervalidation.php";
		exit();
}else if ($pagename=="updateprofile"){
		$_SESSION['editemail']=$_POST['editemail'];
		//$_SESSION['editpassword']=$_POST['editpassword'];
		$_SESSION['editproperty']=$_POST['editproperty'];
		include "updateprofilevalidation.php";
		exit();
}
?>