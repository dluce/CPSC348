<?php
	//if the user already input information, run the script
	if(isset($_POST['new_loc']) && !empty($_POST['new_loc'])){
		//put the new location in the locations table
		include ('db_connect.php');
		$new_loc = $_POST['new_loc'];
		$query = "INSERT INTO locations (name) VALUES ('$new_loc')";
		
		$result = mysql_query($query) or die (mysql_error());
		if($result){
			//not really much need for an "if"  checking structure
			//here, just very simple queries and assignments
			$query = "SELECT id FROM locations WHERE name='$new_loc'";
			$result = mysql_query($query) or die (mysql_error());
			$row = mysql_fetch_array($result);
			$id = $row['id'];
			
			//put in schedule for saturday
			$query = "INSERT INTO times (location_id, day_of) VALUES
				('$id', 'Saturday')";
			$result = mysql_query($query) or die (mysql_error());
			
			//put in schedule for sunday
			$query = "INSERT INTO times (location_id, day_of) VALUES
				('$id', 'Sunday')";
			$result = mysql_query($query) or die (mysql_error());
			
			//successful adding means display the page as normal and
			//then exit so the code below is not executed
			include ('htmlheader.php');
			?>
			<h3>Location successfully added! </h3><br />
			<h4>It should now be visible to the left under the 
				"locations" tab. </h4>
		<?php
			include ('htmlfooter.php');
			exit();
		}
		else{
			include ('htmlheader.php');
			echo "<h2> The database did not like the location name. </h2><br />
				<h4> Back up and try again. </h4>";
			include ('htmlfooter.php');
			exit();
		}
	}
	
	//otherwise, display page as normal
	include ('htmlheader.php');
	
	if(isset($_SESSION['username'])){
	?>
	<h2> Add a Location </h2><br />
	<h3> Simply enter a name and it will be added to the database. </h3><br />
	
	<form method="post" action="add_location.php">
		<input type="text" name="new_loc" size="40" /><br /><br />
		<input type="submit" name="submit" value="Add Location" /> <br />
	</form>

	<?php	
	}
	else{
		echo "<h3> You must be logged in to use this feature. </h3><br />
			You can log in <a href=\"login.php\">here</a> or register 
			<a href=\"register.php\">here.</a>";
		include ('htmlfooter.php');
		exit();
	}
	
	include ('htmlfooter.php');
?>