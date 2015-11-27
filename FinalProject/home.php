<?php
if(!isset($_SESSION)){
	session_start();
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title><Boston Apartments| Boston></title>	
	<meta name="Author" content="Avneet Kaur">
	<meta name="Description" content="home">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
        <script type="text/javascript" src="script.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		
</head>
<body class="home1">
	 <div style = "text-align:right; float:right">
	<?php
		$_SESSION['toloadpage']='home.php';
		if($_SESSION['loginstatus']==0){
			echo '<a href="index.php">Login</a>&nbsp;&nbsp;
			<a href="signup.php">Sign up</a>';
		}else{
			echo '<a href="updateprofile.php">Edit Profile</a>&nbsp;&nbsp;
			<a href="logout.php">Logout</a>';
		}
	?>
	</div>
		
</br></br>
<h1 class="home">MY DREAMHOUSE</h1>
<h2 class="home">REAL ESTATE</h2>
<h5 class="home">299 NEWBURY STREET </h5>
<h5 class="home">BOSTON, MA 02116</h5>
<h5 class="home">TEL:617-322-2324</h5>
<h5 class="home">FAX:617-865-2324</h5>
<h4 class="home">mydreamhouse@gmail.com</h4>


<div>
</div>
<div class="navigation">
	<ul class="nav">
		
		<li><a href="rent.php">FOR RENT</a>
		<ul>
			<li><a href="searchvalidation.php?type=rentloft">LOFT</a></li>
			<li><a href="searchvalidation.php?type=rent1bedroom">1 BEDROOM</a><l1>
			<li><a href="searchvalidation.php?type=rent2bedroom">2 BEDROOMS</a><l1>
			<li><a href="searchvalidation.php?type=rent3bedroom">3 BEDROOMS</a><l1>
		 	<li><a href="">FURNISHED </a></li>
			<li><a href="searchvalidation.php?type=rentall">ALL LISTING</a></li>
	    </ul>
	 </li>
	 <li><a href="sale.php">FOR SALE</a>
		<ul>
			<li><a href="searchvalidation.php?type=saleloft">LOFT</a></li>
			<li><a href="searchvalidation.php?type=sale1bedroom">1 BEDROOM</a><l1>
			<li><a href="searchvalidation.php?type=sale2bedroom">2 BEDROOMS</a><l1>
			<li><a href="searchvalidation.php?type=sale3bedroom">3 BEDROOMS</a><l1>
			<li><a href="">FURNISHED </a></li>
			<li><a href="searchvalidation.php?type=saleall">ALL LISTING</a></li>
		</ul>
	</li>
     <li> <a href="renter.php">RENT PLACE</a> </li>
	 <li><a href="list.php">LANDLORDS</a></li>
     <li><a href="">FOLLOW US</a> 
		<ul>
			<li><a href= https://www.twitter.com>TWITTER</a></li>
			<li><a href= https://www.facebook.com>FACEBOOK</a></li>
		</ul>
	  </li>
		  
	<li><a href="about.php">ABOUT US </a></li>
	<li><a href="contact.php">CONTACT US</a></li>
	</ul>
</div>
 
     <br><br><br><br><br><br><br><br><br><br><br><br><br>
		
	<?php
	if (isset($_SESSION['updatestatus']) and ($_SESSION['updatestatus']==1)){
		echo "<h1>Your Account is successfully updated.</h1>";
		$_SESSION['updatestatus']==0;
	}else if(isset($_SESSION['updatestatus']) and ($_SESSION['updatestatus']==2)){
		echo "<h1>Your Account is successfully deleted.</h1>";
		$_SESSION['updatestatus']==0;
	}else {
		echo "<h2><div>Welcome to My Dreamhouse!</div></h2>";
	}
	?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

     <p>Here at our Company, we understand that everybody has different objectives when searching for an apartment in Boston. We feature all kinds of apartments from a cozy studio to a classic brownstone, and our professional staff aims to achieve optimal results for each client. You can turn to us for your Boston real estate needs!</p>
	 <p>Feel free to browse our newest website acquisitions to see where our newest websites will be created!</p>
</body>
</html>