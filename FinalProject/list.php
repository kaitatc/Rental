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
	<meta name="Description" content="list">
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>LIST WITH US</title>
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
	
</head>

<body class="list">
	    <div style = "text-align:right; float:right">
	<?php
		$_SESSION['toloadpage']='list.php';
		echo  '<a href="home.php">Home</a>&nbsp;&nbsp';
		if($_SESSION['loginstatus']==0){
			echo '<a href="login.php">Login</a>';
		}else{
			echo '<a href="updateprofile.php">Edit Profile</a>
				&nbsp;&nbsp;
			<a href="logout.php">Logout</a>';
		}
	?>
</div>
<h1>Owners and Landlords</h1>
		
<p>Our company can help you advertise your Boston area apartment or commercial property and easily reach hundreds of potential tenants. Simply fill out the form below to list your apartment rental on our site. We invite you to learn more about our Property Management services. For properties being sold, please visit our Sellers page. For immediate assistance contact one of our agents at (617) 332-2324.</p>	

    <form class="list" method="post" action="controller.php"> 
		<input type="hidden" name="pagename" value="list">
	
	 
	<h2>Contact Information</h2>
	First Name:*<input type="text"  name="fname" value=" "style="width: 200px;height:25px">
	&nbsp; &nbsp;&nbsp;&nbsp;Last Name:*<input type="text" name="lname" value="" style="width: 200px;height:25px;"><br><br>
	Phone:*+1<input type="text" name="phone" value="" style="width: 200px;height:25px">
	Address:*<input type="text" name="address" value="" style="width: 400px;height:25px"><br><br>
	City:<input type="text" name="city" value=""style="width: 200px;height:25px">
	&nbsp; &nbsp;&nbsp;&nbsp;State:<input type="text" name="state" style="width: 200px;height:25px"><br><br>
	
	
	
	
	<h2>Apartment/ Property Information</h2>
	Listed Address:*<input type="text" name="listedaddress" value="" style="width: 400px;height:25px"></br></br>
	Area foot:<input type="text" name="areafoot" value="">sqft</br></br>
	Neighborhood:<input type="text" name="neighborhood" value="" style="width: 200px;height:25px">
	&nbsp;&nbsp;&nbsp;&nbsp;Price:$<input type="text" name="price" value=""></br></br>
	Property for:*<select name="propertyfor">
		<option value="rent">Rent</option>
		<option value="sale">Sale</option>
		</select></br></br>
	
	Location:*<select name="location">
    <option value="chelsea">Chelsea</option>
    <option value="south boston">South Boston</option>
    <option value="brookline">Brookline</option>
    <option value="cambridge">Cambridge</option>
    <option value="back bay">Back Bay</option>
    <option value="bay village">Bay Village</option>
    <option value="allston">Allston</option>
    <option value="quincy">Quincy</option>
    </select></br></br>
	
	Monthly Rent:$<input type="text" name="monthlyrent" value="">
	&nbsp;&nbsp;&nbsp;&nbsp;Date Available:*<input id="datepicker" name="dateavailable" type="date" value=""></br></br>
	
	Bedrooms:<select name="bedroom">
		  <option value="1 bed">1 Bed</option>
		  <option value="1.5 beds">1.5 Beds</option>
		  <option value="2 beds">2 Beds</option>
		  <option value="2.5 beds">2.5 Beds</option>
		  <option value="3 beds">3 Beds</option>
		  <option value="4 beds">4 Beds</option>
		  <option value="5+ beds">5+ Beds</option>
		  </select>
		  
		
		
	&nbsp;&nbsp;&nbsp;&nbsp;Bathrooms:<select name="bathroom">
	  <option value="1">1 Baths</option>
	  <option value="1.5">1.5 Baths</option>
	  <option value="2">2 Baths</option>
	  <option value="2.5">2.5 Baths</option>
	  <option value="3">3 Baths</option>
	  <option value="4">4 Baths</option>
	  </select></br></br>
		
	
	
		  
	  Pets:<select name="pets">
		<option value="yes">yes</option>
		<option value="no">no</option></select></br></br>
			
	  Showing Date:<input id="datepicker" type="date" name="showingdate" value=""></br></br>
      Notes:<input type="text" name="notes" value="Type comments here" style="width: 400px; height:250px;"></br></br>	
	
	
     <div class="g-recaptcha" data-sitekey="6LcB1f4SAAAAAA9Ze6Z8pPQF8rTM7LBBYAxIPbU0"></div>
	 <input type="submit" value="Submit">
	<noscript>
		    <iframe src='https://www.google.com/recaptcha/api.js'
			heigth="300" width="500" frameborder="0"> </iframe></br>
			<textarea name="recaptcha_challenge_field" rows="3" cols="40">
			</textarea>
			<input type="hidden" name="recaptcha_challenge_field" value="manal_challenge">
	</noscript>
	
	</form>
</body>
</html>