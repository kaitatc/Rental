<?php
if(!isset($_SESSION)){
	session_start();
}
require_once('databaseconn.php');
$error_message="";
//delete from renter details 
$query="delete from renter where user_id='".$_SESSION['loginusername']."';";
$affectedrows=$db->exec($query);


// delete from property table
$query="delete from property where user_id='".$_SESSION['loginusername']."';";
$affectedrows=$db->exec($query);

//delete from landlord table
$query="delete from landlord where user_id='".$_SESSION['loginusername']."';";
$affectedrows=$db->exec($query);


//delete from user table 
$query="delete from user where user_id='".$_SESSION['loginusername']."';";
$affectedrows=$db->exec($query);



$affectedrows=$db->exec("commit;");

$_SESSION['updatestatus']=2;
$_SESSION['loginstatus']=0;	
$_SESSION['loginusername']='';
$_SESSION['loginpassword']='';
include "home.php";
exit();	

?>