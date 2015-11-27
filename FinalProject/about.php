
<!DOCTYPE HTML>
<html>
       <head>
	   	<meta character="utf-8">
	   	<meta name="Author" content="Avneet Kaur">
	   	<meta name="Description" content="about">
		
		<link rel="stylesheet" type="text/css" href="main.css">
       <title>About Us</title>
	   </head>
       <body class="about">
		  
	 <div style = "text-align:right; float:right">
	<?php
	if(isset($_SESSION['login_flag']) and $_SESSION['login_flag']==0){
		echo '<a href="logout.php">Logout</a>';
	}
	else{
		echo '<a href="index.php">Login</a>';
	}
	?>
	</div>
		   <h1>About Us</h1>
	   		<p>For nearly 30 years our agents have been providing our clients access to the best in Boston apartment rentals, real estate sales, property management, and relocation services. With an expansive inventory of Boston metro apartments for rent and Boston real estate listings throughout greater Boston, our agents know Boston and its neighborhoods and people.</p>
			<p>Our team strives to provide the very best service in the industry. With our one on one approach, each client is regarded as if they were our only client. We offer the most comprehensive search available. Our experienced agents conduct thorough market examinations, utilize our vast database of listings, and provide virtual and guided tours of all properties. In addition, our success in building long-term relationships with property owners has allowed us to provide our clients with an unparalleled selection of Boston apartments and Boston properties.</p></br>
			<h1>Experience and Resources</h1>
			<p>At our Company, you will find apartments and houses that you cannot rent anywhere else. Through the decades of experience and personal relationships with property owners, we have accumulated an unparalleled selection of exclusie properties. From the most luxurious to the economical, this Company can provide you with outstanding apartment rentals and incredible service.</p>
			<p>Browse our Property Listings.</p>
			<h1>Management and Property Owner Satisfaction</h1>
			<p>We have an extremely strong market presence in the greater Boston area. From our prominent online advertising to our vase clientele, your properties will get the exposure they need to match them with qualified renters.</p>
			<p>Find out more on our website by login.</p>
		</body>
</html>