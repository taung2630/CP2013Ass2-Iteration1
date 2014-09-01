<?php    
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<link rel="Icon" href="images/favicon.ico" >
<link rel="stylesheet" href="images/main.css" type="text/css" />
<title>Booking</title>

</head>

<body>
<div id="wrap">
	<div id="header">				
		<h1 id="logo">Group<span class="green">4</span>Cinema<span class="gray"></span></h1>	
		<h2 id="slogan">Best Cinema in Singapore</h2> 
			<ul>
			<li><a href="index.php"><span>Home</span></a></li>
			<li><a href="movies.php"><span>Movies</span></a></li>
            <li id="current"><a href="booking.php"><span>Booking</span></a></li>
            <li><a href="about.php"><span>About</span></a></li>
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
		<h2 align="center">Online Booking</h2>
	<?php
		$username = $_SESSION["username"];
		if ($_SESSION['login']=="1"){
       echo '
	
	<center><h3>Welcome to Group4Cinemas Online Booking system</h3>
	<h3>'.$username.'</h3>
	<h3>Please choose your desired seats from the seating plan below</h3></center>
	
	   <form action="comments.php" method="post">		
				<center><label>Screen</label>
				<table width="100%" border="1" style="table-layout:fixed" onclick="selectCell(event)">
  <tr>
    <th scope="col" width="6.66%">A1</th>
    <th scope="col" width="6.66%">A2</th>
    <th scope="col" width="6.66%">A3</th>
    <th scope="col" width="6.66%">A4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">A5</th>
    <th scope="col" width="6.66%">A6</th>
    <th scope="col" width="6.66%">A7</th>
    <th scope="col" width="6.66%">A8</th>
    <th scope="col" width="6.66%">A9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">A10</th>
    <th scope="col" width="6.66%">A11</th>
    <th scope="col" width="6.66%">A12</th>
    <th scope="col" width="6.66%">A13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">B1</th>
    <th scope="col" width="6.66%">B2</th>
    <th scope="col" width="6.66%">B3</th>
    <th scope="col" width="6.66%">B4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">B5</th>
    <th scope="col" width="6.66%">B6</th>
    <th scope="col" width="6.66%">B7</th>
    <th scope="col" width="6.66%">B8</th>
    <th scope="col" width="6.66%">B9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">B10</th>
    <th scope="col" width="6.66%">B11</th>
    <th scope="col" width="6.66%">B12</th>
    <th scope="col" width="6.66%">B13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">C1</th>
    <th scope="col" width="6.66%">C2</th>
    <th scope="col" width="6.66%">C3</th>
    <th scope="col" width="6.66%">C4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">C5</th>
    <th scope="col" width="6.66%">C6</th>
    <th scope="col" width="6.66%">C7</th>
    <th scope="col" width="6.66%">C8</th>
    <th scope="col" width="6.66%">C9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">C10</th>
    <th scope="col" width="6.66%">C11</th>
    <th scope="col" width="6.66%">C12</th>
    <th scope="col" width="6.66%">C13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">D1</th>
    <th scope="col" width="6.66%">D2</th>
    <th scope="col" width="6.66%">D3</th>
    <th scope="col" width="6.66%">D4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">D5</th>
    <th scope="col" width="6.66%">D6</th>
    <th scope="col" width="6.66%">D7</th>
    <th scope="col" width="6.66%">D8</th>
    <th scope="col" width="6.66%">D9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">D10</th>
    <th scope="col" width="6.66%">D11</th>
    <th scope="col" width="6.66%">D12</th>
    <th scope="col" width="6.66%">D13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">E1</th>
    <th scope="col" width="6.66%">E2</th>
    <th scope="col" width="6.66%">E3</th>
    <th scope="col" width="6.66%">E4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">E5</th>
    <th scope="col" width="6.66%">E6</th>
    <th scope="col" width="6.66%">E7</th>
    <th scope="col" width="6.66%">E8</th>
    <th scope="col" width="6.66%">E9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">E10</th>
    <th scope="col" width="6.66%">E11</th>
    <th scope="col" width="6.66%">E12</th>
    <th scope="col" width="6.66%">E13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">F1</th>
    <th scope="col" width="6.66%">F2</th>
    <th scope="col" width="6.66%">F3</th>
    <th scope="col" width="6.66%">F4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">F5</th>
    <th scope="col" width="6.66%">F6</th>
    <th scope="col" width="6.66%">F7</th>
    <th scope="col" width="6.66%">F8</th>
    <th scope="col" width="6.66%">F9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">F10</th>
    <th scope="col" width="6.66%">F11</th>
    <th scope="col" width="6.66%">F12</th>
    <th scope="col" width="6.66%">F13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">G1</th>
    <th scope="col" width="6.66%">G2</th>
    <th scope="col" width="6.66%">G3</th>
    <th scope="col" width="6.66%">G4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">H5</th>
    <th scope="col" width="6.66%">H6</th>
    <th scope="col" width="6.66%">H7</th>
    <th scope="col" width="6.66%">H8</th>
    <th scope="col" width="6.66%">H9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">H10</th>
    <th scope="col" width="6.66%">H11</th>
    <th scope="col" width="6.66%">H12</th>
    <th scope="col" width="6.66%">H13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">I1</th>
    <th scope="col" width="6.66%">I2</th>
    <th scope="col" width="6.66%">I3</th>
    <th scope="col" width="6.66%">I4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">I5</th>
    <th scope="col" width="6.66%">I6</th>
    <th scope="col" width="6.66%">I7</th>
    <th scope="col" width="6.66%">I8</th>
    <th scope="col" width="6.66%">I9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">I10</th>
    <th scope="col" width="6.66%">I11</th>
    <th scope="col" width="6.66%">I12</th>
    <th scope="col" width="6.66%">I13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">J1</th>
    <th scope="col" width="6.66%">J2</th>
    <th scope="col" width="6.66%">J3</th>
    <th scope="col" width="6.66%">J4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">J5</th>
    <th scope="col" width="6.66%">J6</th>
    <th scope="col" width="6.66%">J7</th>
    <th scope="col" width="6.66%">J8</th>
    <th scope="col" width="6.66%">J9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">J10</th>
    <th scope="col" width="6.66%">J11</th>
    <th scope="col" width="6.66%">J12</th>
    <th scope="col" width="6.66%">J13</th>
  </tr>
  <tr>
    <th scope="col" width="6.66%">K1</th>
    <th scope="col" width="6.66%">K2</th>
    <th scope="col" width="6.66%">K3</th>
    <th scope="col" width="6.66%">K4</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">K5</th>
    <th scope="col" width="6.66%">K6</th>
    <th scope="col" width="6.66%">K7</th>
    <th scope="col" width="6.66%">K8</th>
    <th scope="col" width="6.66%">K9</th>
    <th scope="col" width="6.66%"></th>
    <th scope="col" width="6.66%">K10</th>
    <th scope="col" width="6.66%">K11</th>
    <th scope="col" width="6.66%">K12</th>
    <th scope="col" width="6.66%">K13</th>
  </tr>
</table>
				<br /><h3>Please choose the tickets you desire from the menu</h3>
				<input class="button" type="submit" />	
		

			</form>';	
		}
		else	{
			echo '<center><h3>Please login or register to book online tickets </h3></center>';
	  }
             ?>	
        <p><center>Tickets are 13SGD per ticket and are non-refundable if booking is cancelled</center></p>
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
