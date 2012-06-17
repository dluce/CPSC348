<?php
	//htmlheader.php : html used on every page in the site.
	//	used in conjunction with htmlfooter.php in order to
	//	simplify page writing - include 'htmlheader.php' to get all the 
	//	menu items, write any html you want to (it will all be enclosed
	//	within the content_main div), and then include 'htmlfooter.php'
	//	to finish the page. No other html writing is needed.
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
	echo "			<h2>Girl Scout Cookie Booth Locations</h2>";
	echo "		</div>   ";
		
	echo "		<div id=\"menu\">";
	echo "			<ul>";
	echo "				<li class=\"menuitem\"><a href=\"index.html\">Home</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"#\">Login</a></li> ";
	echo "				<li class=\"menuitem\"><a href=\"register.html\">Sign-Up Sheet</a></li>";
	echo "				<li class=\"menuitem\"><a href=\"http://www.girlscouts.org\">Girl Scouts</a></li>";
	echo "			</ul>";
	echo "		</div>";
	
	echo "		<div id=\"leftmenu\">";

	echo "		<div id=\"leftmenu_top\"></div>";

	echo "				<div id=\"leftmenu_main\">    ";
					
	echo "				<h3>Locations</h3>";
							
	echo "				<ul>";
	echo "					<li><a href=\"#\">List</a></li>";
	echo "					<li><a href=\"#\">of</a></li>";
	echo "					<li><a href=\"#\">Locations</a></li>";
	echo "					<li><a href=\"#\">Goes</a></li>";
	echo "					<li><a href=\"#\">Here</a></li>";
	echo "					<li><a href=\"#\">(brings up schedules for each location)</a></li>";

	echo "				</ul>";
	echo "</div>";
					
					
	echo "			  <div id=\"leftmenu_bottom\"></div>";
	echo "		</div>";
			
			
			
			
	echo "		<div id=\"content\">";
			
	echo "		<div id=\"content_top\"></div>";
	echo "		<div id=\"content_main\">";
?>