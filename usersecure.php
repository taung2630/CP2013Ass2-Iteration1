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
            <li><a href="booking.php"><span>Booking</span></a></li>
            <li><a href="about.php"><span>About</span></a></li>
            <li><a href="feedback.php"><span>Feedback</span></a></li>
            <li id="current"><a href="contact.php"><span>Contact</span></a></li>
		</ul>	
	</div>	
	<div id="content-wrap">		
	
		<div id="sidebar" >							
			<h1>About us</h1>
			<h1>Useful links</h1>
            <p align="center"><a href="http://www.imdb.com" target="_blank">IMDB</a></p>
           	
		</div>
		<div id="main">	
		<?php
		
		$connection = mysql_connect("localhost", "jc264004","Jfh2DyvtExxI0Zww","");
		if ( !$connection ) {
			die('Could not connect to localhost.');	
		}
		
		
		$db = mysql_select_db("db_jc264004", $connection);
		if ( !$db) {
			die ('Could not find database.');	
		}

		$result = mysql_query("SELECT * from userinfo WHERE Email ='".$_SESSION['email']."'", $connection);	
		
			echo "<h1>User information</h1>";
		while ($row = mysql_fetch_array($result)) {
			
			echo "<center><h3>Username: ".$row['Username'] . "</center></h3><br /><br />";
			echo "<center><h3>Email Address: ".$row['Email'] . "</center></h3><br /><br />";	
			echo "<center><h3>Country of origin: ".$row['country'] . "</center></h3><br /><br />";
			echo "<center><h3>Sex: ".$row['sex'] . "</center></h3><br /><br />";
			echo "<center><h3>First Name: ".$row['fname'] . "</center></h3><br /><br />";
			echo "<center><h3>Last Name: ".$row['lname'] . "</center></h3><br /><br />";		
											
		}
		
		mysql_free_result($result); 		
		
		$query3 = "SELECT username from Comments WHERE username ='".$_SESSION['username']."'";
		$result3 = mysql_query($query3, $connection);
		echo "<center><h3>No. of comments given: ".mysql_num_rows($result3). "</center></h3><br /><br />";
		
		mysql_close($connection);										
    ?>
    <center><h2>You can delete your previous bookings here</h2>
    <form action="deleteuserbooking.php" method="get">  
        <table border="1" cellpadding="10px" cellspacing="0" width="100%">
        <tr>
        <th></th>
        <th>Movie Title</th>
        <th>Date and Time</th>
        <th>Seat No.</th>        
        </tr>
        <?php
		$connection = mysql_connect("localhost", "jc264004","Jfh2DyvtExxI0Zww","");
		if ( !$connection ) {
			die('Could not connect to localhost.');	
		}
		
		
		$db = mysql_select_db("db_jc264004", $connection);
		if ( !$db) {
			die ('Could not find database.');	
		}
		
            // retrieve new records and update the page view
            $result = mysql_query("SELECT * FROM userinfo WHERE  Email ='".$_SESSION['email']."'", $connection);	
            //loop through all table rows
            while ($row = mysql_fetch_array($result)) {
                echo "<tr>";
                echo "<td><input name='email' type='radio' value='" . $row['email'] . "' /></td>";
                echo "<td>" . $row['MovieTitle'] . "</td>";
                echo "<td>" . $row['DateandTime'] . "</td>";
                echo "<td>" . $row['SeatNo'] . "</td>";		
                echo "</tr>";										
            }
            // free result memory and close database connection
            mysql_free_result($result);
            mysql_close($connection);										
        ?>
        </table>

    	<p align='center'><input type="submit" name="Submit" value="Delete" /> </p>
    </form></center>
<center><button onclick="goBack()">Go Back</button></center>
<br /><br />
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
