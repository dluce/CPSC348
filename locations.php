<?php
	include ('htmlheader.php');
	include ('db_connect.php');
	if(isset($_GET['location'])){
		$location = $_GET['location'];
		echo "<h2>Viewing Schedule For Location: $location </h2><br />";
		$query = "SELECT t.*
			FROM times AS t
			INNER JOIN locations AS l
			ON l.id = t.location_id
			WHERE l.name = '$location'";
		$result = mysql_query($query) or die (mysql_error());
		
		//initialize counter and zone for table display
		$counter = 9;
		$zone = "AM";
		
		//start the table ?>
		<table id="locations">
		<tr><th>Day</th><th colspan="2">Time</th></tr>
		<?php
		while ($row = mysql_fetch_array($result)){
			//fill the table
			echo "  <tr><th rowspan=\"6\">". $row['day_of'] ."</th></tr>";
			for ($i = 2; $i < 7; $i++){
				echo " <tr><td>$counter" . ":00" . "$zone</td> ";
				
				//utilizes the php array implementation to
				//iterate through the boolean results
				if($row[$i]){
					echo "<td><em>Block already taken by:</em><br />
						Troop " . $row[$i+5] . "</td></tr>";
				}
				else{
					//use the $_GET array to pass specific time slots
					//to the handler script
					echo "<td><a href=\"take_spot.php?
							spot=time" . $i-1 . "&day=" .
						$row['day_of'] . "\">Sign Up</a></td></tr>";
				}
				//increment counter to get the different times
				$counter += 2;
				if($counter > 12){
					$counter = 1;
					$zone = "PM";
				}
			}
			//reset counter and zone for the sunday table insert
			$counter = 9;
			$zone = "AM";
		}
		//end the table
		echo "</table>";
	}
	else{
		?>
		<h2>To get a table of available times for a location, please
			click on one of the tabs to the left under "Locations"</h2>
	<?php	
	}
	include ('htmlfooter.php');
?>
