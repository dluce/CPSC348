<?php
	//This is the script file, used to verify the user's identity
	include ('htmlheader.php');
	include ('db_connect.php');
	//contains all information for connecting to the database
	//including error messages
	if ( empty($_POST['troop'])
		|| empty($_POST['phone'])
		|| empty($_POST['name'])
		|| empty($_POST['password'])) {
		
		echo "<p> All information is required! <br />
				Back up and try again.</p>";
		include ('htmlfooter.php');
		exit();
	}
	else {
		

		//check to see if user is logged in
		if(isset($_SESSION['username'])){
			//if they are, continue
			$spot = $_POST['spot'];
			$day = $_POST['day'];
			$location = $_POST['location_id'];
echo "$spot, $day, $location <br />";			
			$reserve = $_SESSION['reserve'];
			if ($reserve){
				echo "<h2>You have already reserved a spot for this week. <br />
				Only one spot per troop is allowed per week. You may <br />
				drop your current spot automatically by clicking <a href=\"drop_time.php\">here</a><br />
				and then sign up for a different one.</p>";
				include ('htmlfooter.php');
				exit();
			}
			
			//parse out the slot(x) number to add the troop
			//to the corresponding troop_number(x) column.
			$tr_num = substr($spot, 4);
echo "$tr_num <br />";
			$troop_take = "troop_number" . $tr_num;
			echo "$troop_take";
			
			//check to see if everything matches up
			$name = $_POST['name'];
			$troop = $_POST['troop'];
			$phone = $_POST['phone'];
			$password = sha1($_POST['password']);
			
			if ($name==$_SESSION['username'] 
				&& $troop==$_SESSION['troop'] 
				&& $phone==$_SESSION['phone']
				&& $password==$_SESSION['pass']) {
				
				$troop_num = $_SESSION['troop'];
				$query = "UPDATE times SET $spot = 1, $troop_take = '$troop_num' 
							WHERE location_id = 
							(SELECT id FROM locations WHERE name = '$location')
							AND day_of = '$day'";
echo "$query <br />";							
				$result = mysql_query($query) or die (mysql_error());
				if ($result) {
					//set the current_time_slot for the user who reserved it
					//allows for later dropping of the time slot by parsing
					//the string
echo "$result <br />";					
					$username = $_SESSION['username'];
					$query = "UPDATE users SET current_time_slot = 
						'$spot,$troop_take,$location,$day' WHERE 
						username = '$username'";
echo "$query <br />";					
					$result = mysql_query($query) or die (mysql_error());
					if($result){
						echo "You have successfully reserved the timeslot.";
					}
				}
			}
		}
		//if they're not logged in, quit out
		else{
			echo "<p>You must be logged in to claim a cookie booth. <br>
				Either register <a href=\"register.php\">here</a> or 
				login <a href=\"login.php\">here</a> to do so.</p>";
			include('htmlfooter.php');
			exit();
		}
	}
	include ('htmlfooter.php');
?>
