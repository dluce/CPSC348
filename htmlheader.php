<?php
	//htmlheader.php : html used on every page in the site.
	//	used in conjunction with htmlfooter.php in order to
	//	simplify page writing - include 'htmlheader.php' to get all the 
	//	menu items, write any html you want to (it will all be enclosed
	//	within the content_main div), and then include 'htmlfooter.php'
	//	to finish the page. No other html writing is needed.
	
	session_start(); //need this on pretty much all pages
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" 
			\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">";
	echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">";
	echo "<head>";
	echo "	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\" />";
	echo "	<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />";
	
	//added a favicon
	echo "	<link rel=\"shortcut icon\" href=\"images/favicon.ico\" />";
	echo "	<title>Fredericksburg Sign-Up (Girl Scouts)</title>";
	echo "</head>";

	echo "<body>";
	echo "<div id=\"container\">";
	echo "		<div id=\"header\">";
	echo "			<h1>Fredericksburg, <span class=\"off\">VA</span></h1>";
	echo "			<h2>Girl Scout Cookie Booth Locations</h2>";
	
	echo "		</div>   ";
	
	//menu buttons along the top
	echo "		<div id=\"menu\">";
	echo "			<ul>";
	echo "				<li class=\"menuitem\"><a href=\"index.php\">Home</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"add_location.php\">Add a Location</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"register.php\">Sign-Up Sheet</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"http://www.girlscouts.org\">Girl Scouts</a></li>";
	
	//show a login or logout button as appropriate
	if(isset($_SESSION['username'])){
		echo "			<li class=\"menuitem\"><a href=\"logout.php\">Log Out</a></li> ";
		if($_SESSION['username'] == "admin"){
			echo "<li class=\"menuitem\"><a href=\"reset_db.php\">Reset Schedule</a></li>";
		}
	}
	else{
		echo "			<li class=\"menuitem\"><a href=\"login.php\">Login</a></li> ";
	}
	
	echo "			</ul>";
	echo "		</div>";
	
	echo "		<div id=\"leftmenu\">";

	echo "		<div id=\"leftmenu_top\"></div>";

	echo "				<div id=\"leftmenu_main\">    ";
					
	echo "				<h3>Locations</h3>";
							
	echo "				<ul>";
	
	//get all the locations in the db and display them on the sidebar;
	//this enables users to add locations if they want to and not
	//need to re-code this file
	include ('db_connect.php');
	$query = "SELECT name FROM locations"; //grab every name
	
	$result = mysql_query($query) or die (mysql_error());
	while($row = mysql_fetch_array($result)){
		$name = $row['name'];
		//locations.php will use the location GET variable
		//to query the db based on what location name 
		//is clicked, eliminating the need for multiple files
		//for multiple locations
		echo "	<li><a href=\"locations.php?location=$name\">$name</a></li>";
	}
	
	echo "				</ul>";
	echo "</div>";
					
					
	echo "			  <div id=\"leftmenu_bottom\"></div>";
	echo "		</div>";
			
			
			
			
	echo "		<div id=\"content\">";
			
	echo "		<div id=\"content_top\"></div>";
	echo "		<div id=\"content_main\">";
	
	//session header if someone is logged in
	if(isset($_SESSION['username'])){
		echo "		<h3>Logged In As: " . $_SESSION['realname'] . "</h3>";
		
		if($_SESSION['username'] == "admin"){
			//don't do this next part if admin
		}
		else{
			$user = $_SESSION['username'];
			$query = "SELECT current_time_slot FROM users WHERE 
					username = '$user'";
					
			$result = mysql_query($query) or die (mysql_error());
			if ($row = mysql_fetch_array($result)){
				//automatically display the currently reserved spot
				//for a logged in user if they have reserved one
				$current = $row['current_time_slot'];
				$parse = explode(",", $current);
				
				$spot = $parse[0];
				$troop_take = $parse[1];
				$location = $parse[2];
				$day = $parse[3];
				
				echo " <h3>Current Time Slot: ";
				
				//switch statement that displays the reserved location
				//in a pre-formatted manner
				switch ($spot) {
					case "time1":
						echo "9:00 AM on ";
						echo "$day at $location. </h3>";
						echo "<a href=\"drop_time.php\">Drop Reservation</a>";
						break;
					case "time2":
						echo "11:00 AM on ";
						echo "$day at $location. </h3>";
						echo "<a href=\"drop_time.php\">Drop Reservation</a>";
						break;
					case "time3":
						echo "1:00 PM on ";
						echo "$day at $location. </h3>";
						echo "<a href=\"drop_time.php\">Drop Reservation</a>";
						break;
					case "time4":
						echo "3:00 PM on ";
						echo "$day at $location. </h3>";
						echo "<a href=\"drop_time.php\">Drop Reservation</a>";
						break;
					case "time5":
						echo "5:00 PM on ";
						echo "$day at $location. </h3>";
						echo "<a href=\"drop_time.php\">Drop Reservation</a>";
						break;
					default:
						echo "No time has been reserved for this user.";
				}
			}
		}
	}
	echo "<br />";
?>
