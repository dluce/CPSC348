<?php
	include ('htmlheader.php');
	include ('db_connect.php');
	
	if (isset($_SESSION['username'])){
		$query = "SELECT current_time_slot FROM users WHERE 
			username=" . $_SESSION['username'];
		
		$result = mysql_query($query) or die (mysql_error());
		if ($row = mysql_fetch_array($result)){
			string $current = $row['current_time_slot'];
			array $parse = explode("," , $current);
			$spot = $parse[0];
			$troop_take = $parse[1];
			$location = $parse[2];
			$day = $parse[3];
			
			//destroy the set time slot in the 'times' table and free up
			//the user's current_time_slot
			$query = "UPDATE times SET $spot=0, $troop_take = 0
				WHERE location_id = 
					(SELECT id FROM locations WHERE name = '$location')
				AND day_of = '$day'";
			
			$result = mysql_query($query) or die (mysql_error());
			//if update statement worked, change the users table to reflect
			//the loss in spot reservation, and print out a success message
			if($result){
				$query = "UPDATE users SET current_time_slot = ''
					WHERE username = " . $_SESSION['username'];
				
				$result = mysql_query($query) or die (mysql_error());
				if($result){
					echo "<p>You have successfully dropped your time slot. <br />
						Feel free to choose another. </p>";
				}
				else{
					echo "<p> We could not change the users table to reflect
						the change in time slot. </p>";
				}
			}
		}
		else{
			echo "<p>You have no current time slot to drop! </p>";
			include ('htmlfooter.php');
			exit();
		}
	}
	else{
		echo "<p> You are not currently logged in. 
			<a href=\"login.php\">Login</a> to <br />
			drop your current time slot.</p>";
	}
	include ('htmlfooter.php');
?>