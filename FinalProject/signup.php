<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="Author" content="Avneet Kaur">
		<meta name="Description" content="signup">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		 <script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body class="signup">
		
	<?php
		echo '<p>';
		if (isset($error_message)){
			echo $error_message;
		}
		echo '</p>';
	?>
		
		  <h1 class="signup">Please Register here:</h1>
	   <form signup="value" method="post" action="controller.php">
			  
			<input type="hidden" name="pagename" value="signup">
					
			Email ID*: <input type="email" name="emailid"><br><br>
			Password*: <input type="password" name="password"><br><br>
			Confirm Password*: <input type="password" name="cpassword"><br><br>	
			Username*:<input type="username" name="username"><br><br>		
			
			<p>Do you want to enter as a </p> <br>
	
			<input type="radio" name="radio" value="renter">Renter
			<input type="radio" name="radio" value="landlord">Landlord</br></br>
			 <div class="g-recaptcha" data-sitekey="6LcB1f4SAAAAAA9Ze6Z8pPQF8rTM7LBBYAxIPbU0"></div>
			<input type="submit" value="Submit">
			
		</form>
	</body>
</html>
