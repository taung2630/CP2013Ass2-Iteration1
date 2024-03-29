CP2013Ass2-Iteration1
=====================
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>About</title>

</head>

<body>
<div id="wrap">
	<div id="header">				
		<h1 id="logo">Group<span class="green">4</span>Cinema<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinema in Singapore</h2> 
		<ul>
			<li><a href="index.php"><span>Home</span></a></li>
			<li><a href="movies.php"><span>Movies</span></a></li>
            <li><a href="booking.php"><span>Booking</span></a></li>
            <li id="current"><a href="about.php"><span>About</span></a></li>
            <li><a href="feedback.php"><span>Feedback</span></a></li>
            <li><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
           	
		</div>
		<div id="main">	
		
        <center><h3>Welcome to The Group 4 Cinema</h3></center>
        <p>Group4Cinema is located at the heart of downtown Singapore. We offer the best movie viewing experience for our viewers. Our cinemas are occupied with state of the art sound systems and projectors for a immersive movie experience. We also offer the tastiest snacks and drinks for viewers to enjoy. </p>
        
        <p>
        <p> Please login or register to leave valuable feedback for us. Your feedback is critical for us to keep refining our website and information to make sure it is the best for our readers.</p>
        <p>
        
		</div>	
		<div id="rightbar">
        
		<?php 
		include('login.php');
		 ?>  
			<h1>About Singapore</h1>
			<p>Singapore is an island nation in South-East Asia which attracts a large number of visitors yearly. Singapore is an English speaking country and is considered one of the best shopping cities in the world. It also has extravagant casinos, succulent local cuisine, breathtaking sightseeing locations and an exhilarating nightlife.</p>
		</div>			
	</div>
<div id="footer">
	<div class="footer-left">
		<p class="align-left">			
		&copy; 2014 <strong>Group 4 Cinema</strong> |
		Design by <strong>SP53 2014</strong>
		
		</p>		
	</div>
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.php">Home</a>&nbsp;|&nbsp;
  		<a href="contact.php">Contact</a>
   	
		</p>
	</div>
	</div>
</div>

</body>
</html>
