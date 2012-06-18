<?php
	include ('htmlheader.php');
	include ('db_connect.php');
	
	if (isset($_SESSION['username'])){
		$user = $_SESSION['username'];
		$query = "SELECT current_time_slot FROM users WHERE 
			username= '$user'";
		
		$result = mysql_query($query) or die (mysql_error());
		if ($row = mysql_fetch_array($result)){
			$current = $row['current_time_slot'];
			//make sure that current isnt empty; otherwise
			//the code bombs really easily in several different
			//situations
			if( !empty($current)){
				$parse = explode("," , $current);
				
				$spot = $parse[0];
				$troop_take = $parse[1];
				$location = $parse[2];
				$day = $parse[3];
				
				//destroy the set time slot in the 'times' table
				//subquery needed to grab the location_id
				$query = "UPDATE times SET $spot = 0, $troop_take = NULL
					WHERE location_id = 
						(SELECT id FROM locations WHERE name = '$location')
					AND day_of = '$day'";
				
				$result = mysql_query($query) or die (mysql_error());
				//if update statement worked, change the users table to reflect
				//the loss in spot reservation, and print out a success message
				if($result){
					$query = "UPDATE users SET current_time_slot = ''
						WHERE username = '$user'";
					
					$result = mysql_query($query) or die (mysql_error());
					if($result){
						echo "<h2>You have successfully dropped your time slot. </h2><br />
							<h3>Feel free to choose another. </h3>";
					}
					//If this happens, it is VERY BAD. Should NEVER happen.
					//if it does, you will need to reset the database.
					else{
						echo "<h2> WARNING: We could not change the users table to reflect
							the change in time slot. </h2>
							<p>To fix this, you will need to manually update
							the user information from the MySQL Console.</p>";
					}
				}
			}
			else {
			?>
				<h2> You have no current time slot to drop! </h2>
				<h3> Go sign up for one.</h3>
			<?php
			}
		}
		else{
			echo "<h2>You have no current time slot to drop! </h2>
				<h3>Go sign up for one</h3>";
			include ('htmlfooter.php');
			exit();
		}
	}
	else{
		echo "<p> You are not currently logged in. 
			<a href=\"login.php\">Login</a> to <br />
			drop your current time slot.</p>";
		include('htmlfooter.php');
		exit();
	}
	include ('htmlfooter.php');
?>