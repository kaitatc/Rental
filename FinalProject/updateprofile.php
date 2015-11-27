<?php
if(!isset($_SESSION)){
    session_start();
}
require_once('databaseconn.php');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="Author" content="Avneet Kaur">
		<meta name="Description" content="updateprofile">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="main.css">

	</head>
	<body class="update">
		<div id="loginregister">
			<div style = "text-align:right; float:right">
		<?php
			echo  '<a href="home.php">Home</a>&nbsp;&nbsp';
			if($_SESSION['loginstatus']==0) {
				echo '<a href="login.php">Login</a>&nbsp;&nbsp;<a href="signup.php">Sign up</a>';
			} else {
				echo '<a href="updateprofile.php">Edit Profile</a> 
				&nbsp;&nbsp;
				<a href="logout.php">Logout</a>';
			}
		?>
	          </div>
		</div>
		<div>
			
			<h1>Profile Edit Page</h1>
			<form  method="post" action="controller.php">
			<input type="hidden" name="pagename" value="updateprofile">
		<?php
			echo '<p>';
			if (isset($error_message)){
				echo $error_message;
			}
			echo "</p>";
			
			$userdetailquery = "select * from user where user_id='".$_SESSION['loginusername']."';";			
			$stmt=$db->prepare($userdetailquery);
			$stmt->execute();
			$result=$stmt->fetch();
			/*echo $result['user_email'];
			echo $result['user_password'];*/
		?>			
			Email ID*: <input type="text" name="editemail" value="<?php echo $result['user_email']; ?>"style="width: 200px;height:25px"><br><br>
			Property:  
			<input type="radio" name="editproperty" value="Renter">Renter
			<input type="radio" name="editproperty" value="Landlord">Landlord</br></br>
			<input type="submit" value="Update">
			</form>
			<form action="deleteaccount.php" method="post">
				<input type="hidden" name="delete">
				<input type="submit" value="Delete Account">
			</form>	
		</div>
		
	</body>
</html>