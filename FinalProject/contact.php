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
	<meta name="Description" content="Contact">
	<link rel="stylesheet" type="text/css" href="main.css">
    <script type="text/javascript" src="script.js"></script>
	 <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	 <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 	 <link rel="stylesheet" type="text/css" href="engine1/style.css" />
 	 <script type="text/javascript" src="engine1/jquery.js"></script>
     
	<title>Contact Us</title>

</head>
<body class="contact">
	<form signup="value" method="post" action="controller.php">
		<input type="hidden" name="pagename" value="contact">
	
    <div style = "text-align:right; float:right">
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
    
   </div>
	
    <body style="background-color:#D3D3D3;margin:0;">
   
	<div id="wowslider-container1">
	<div class="ws_images">
		<ul>
		<li><img src="images/oneroom.jpg" alt="" title="Contact Us" id="wows1_0"/></li>
		<li><img src="images/kitchen.jpg" alt="" title="" id="wows1_1"/></li>
		<li><a href="http://wowslider.com"><img src="images/studio1.jpg" alt="wowslider" title="" id="wows1_2"/></a></li>
		<li><img src="images/image1.jpg" alt="" title="" id="wows1_3"/></li>
	    </ul>
    </div>
	<div class="ws_bullets">
		<div>
		<a href="#" title=""><img src="images/tooltips/oneroom.jpg" alt=""/>1</a>
		<a href="#" title=""><img src="images/tooltips/kitchen.jpg" alt=""/>2</a>
		<a href="#" title=""><img src="images/tooltips/studio1.jpg" alt=""/>3</a>
		<a href="#" title=""><img src="images/tooltips/image1.jpg" alt=""/>4</a>
     	</div>
    </div>
	<span class="wsl"><a href="http://wowslider.com/vs"></a></span>
	    <div class="ws_shadow">
		</div>
	</div>	
	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	</br></br></br></br></br></br></br></br></br>
	
	<div style="overflow:hidden;height:400px;width:600px;margin-left: auto;margin-right: auto;">
	  <div id="gmap_canvas" style="height:400px;width:500px;">
	  </div>
	  <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	  <a class="google-map-code" href="http://www.trivoo.net/gutscheine/" id="get-map-data">gutscheine</a>
	</div>
	
	<div class="align">
	<h3>View larger map</h3>
	<h1>Contact Us</h1>
	<h3> 299 Newbury Street</h3>
	<h3>Second floor</h3>
	<h3>Boston, MA 02116</h3>
	<h3>TEL:(617)-322-2324</h3>
	<h3>FAX:(617)-865-2324</h3>
	<h3>Find your dream home with us. <a href="http://www.gmail.com">here</a ></h3><br><br>
	</div>
	
	
</br></br></br></br></br></br></br></br></br>
	<script type="text/javascript"> 
	        function init_map(){
		    var myOptions = {zoom:14,center:new google.maps.LatLng(42.330001,-71.20339000000001),mapTypeId: google.maps.MapTypeId.ROADMAP};
		    map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
		    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(42.330001, -71.20339000000001)});
		    infowindow = new google.maps.InfoWindow({content:"<b>299</b><br/>Newbury Street<br/> Boston" });
			google.maps.event.addListener(marker,"click",function(){
				    infowindow.open(map,marker);});
					infowindow.open(map,marker);}
					google.maps.event.addDomListener(window, 'load', init_map);
	 </script>
	

</body>
</html>

