<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE HTML>
<html>
<head>
		<meta character="utf-8">
		<meta name="Author" content="Avneet Kaur">
		<meta name="Description" content="renter">
		<link rel="stylesheet" type="text/css" href="main.css">
        <script type="text/javascript" src="script.js"></script>
		 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		 <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		 <script src='https://www.google.com/recaptcha/api.js'></script>
		 <script>
		  $(function(){
		    $.datepicker.setDefaults(
		      $.extend( $.datepicker.regional[ '' ] )
		    );
		    $( '#datepicker' ).datepicker();
		  });
		  </script>
<title>Renter</title>
</head>
<body class="renter">
	 <div style = "text-align:right; float:right">
	<?php
		$_SESSION['toloadpage']='renter.php';
		echo  '<a href="home.php">Home</a>&nbsp;&nbsp';
		if($_SESSION['loginstatus']==0){
			echo '<a href="login.php">Login</a>&nbsp;&nbsp';
		}else{
			echo '<a href="updateprofile.php">Edit Profile</a>&nbsp;&nbsp;<a href="logout.php">Logout</a>';
		}
	?>
	</div>
<h1>Boston Apartment Search</h1>
<p>At our Company we focus on apartments and real estate all over Boston and the metropolitan area. With one of the largest apartment databases in the business filled with high quality Boston apartment listings, we make finding the right place a smooth and easy process. We have both high quality and exclusive Boston area apartment listings, which are updated by our staff daily. With our skilled real estate agents, we do what it takes to find you an apartment in Boston that exceeds your expectations. Fill out the form below and contact us today to see why we are the best for all of your Boston apartment rental needs.</p>

<form class="renter" method="post" action="controller.php">
	<input type="hidden" name="pagename" value="renter">
	<?php
	if(isset($error_message) and $error_message!=null){
		echo "<div>".$error_message."</div>";
	}
	?>
   
	<h2>Renter Information</h2>
	First Name:*<input type="text" name="fname" value=""style="width: 200px;height:25px">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last name:*<input type="text" name="lname" value=""style="width: 200px;height:25px"><br><br>
    Username:*<input type="text" name="username" value=""style="width: 200px;height:25px">
  	&nbsp; &nbsp;&nbsp;&nbsp;Occupation:<input type="text" name="occupation" value=""style="width: 200px;height:25px"><br><br>
	Phone:*<input type="text" name="phone" value=""style="width: 200px;height:25px">
    &nbsp; &nbsp;&nbsp;&nbsp;Rental Interest:<select type="text" name="location" >
	<option value="1bedroom"> 1 bedroom</option>
    <option value="2bedroom">2 bedroom</option>
	<option value="3bedroom">3 bedroom</option>
    <option value="loft">loft</option>
    </select></br></br>
	Price Range: $<input type="text" name="Price Range" value="Min"style="width: 200px;height:25px"> &nbsp;
	to &nbsp<input type="text" name="pricerange" value="Max"style="width: 200px;height:25px"><br><br>
    Moving Date:<input id="datepicker" name="movingdate" type="date" value=""style="width: 200px;height:25px"><br><br><br>
    Notes:<input type="text" name="notes" value=""style="width: 400px; height:250px;"><br><br>

   <div class="g-recaptcha" data-sitekey="6LcB1f4SAAAAAA9Ze6Z8pPQF8rTM7LBBYAxIPbU0"></div>
   <input type="submit" value="Submit">
</form>
</body>
</html>