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
	echo "	<link rel=\"shortcut icon\" href=\"images/favicon.ico\" />";
	echo "	<title>Fredericksburg Sign-Up (Girl Scouts)</title>";
	echo "</head>";

	echo "<body>";
	echo "<div id=\"container\">";
	echo "		<div id=\"header\">";
	echo "			<h1>Fredericksburg, <span class=\"off\">VA</span></h1>";
	echo "			<h2>Girl Scout Cookie Booth Locations</h2><br />";
	
	//session header if someone is logged in
	if(isset($_SESSION['username'])){
		echo "<h3>Current User: " . $_SESSION['realname'] . "</h3>";
	}
	
	echo "		</div>   ";
		
	echo "		<div id=\"menu\">";
	echo "			<ul>";
	echo "				<li class=\"menuitem\"><a href=\"index.php\">Home</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"login.php\">Login</a></li> ";
	echo "				<li class=\"menuitem\"><a href=\"register.php\">Sign-Up Sheet</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"http://www.girlscouts.org\">Girl Scouts</a></li>";
	
	if(isset($_SESSION['username'])){
		echo "<li class=\"menuitem\"><a href=\"logout.php\">Log Out</a></li> ";
	}
	
	echo "			</ul>";
	echo "		</div>";
	
	echo "		<div id=\"leftmenu\">";

	echo "		<div id=\"leftmenu_top\"></div>";

	echo "				<div id=\"leftmenu_main\">    ";
					
	echo "				<h3>Locations</h3>";
							
	echo "				<ul>";
	
	//get all the locations and display them on a sidebar;
	//this enables users to add locations if they want to
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
?>