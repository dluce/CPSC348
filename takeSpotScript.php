<?php
	//This is the script file, used to verify the user's identity
	include ('htmlheader.php');
	include ('db_connect.php');
	//contains all information for connecting to the database
	//including error messages
	
	if ( empty($_POST['troop']) && empty($_POST['phone']) 
		&& empty($_POST['name']) && empty($_POST['password'])) {
		
		echo "<p> All information is required! <br />
				Back up and try again.</p>";
		include ('htmlfooter.php');
		exit();
	}
	else {
		$name = $_POST['name'];
		$troop = $_POST['troop'];
		$phone = $_POST['phone'];
		$password = sha1($_POST['password']);

		//check to see if user is logged in
		if(isset($_SESSION['realname'])){
			//if they are, continue
			$spot = $_POST['spot'];
			$day = $_POST['day'];
			$location = $_GET['location'];
			
			//parse out the slot(x) number to add the troop
			//to the corresponding troop_number(x) column.
			$troop_take = "troop_number" . substr($spot, 4);
			echo "$troop_take";
			
			//check to see if everything matches up
			if ($name==$_SESSION['username'] 
			&& $troop==$_SESSION['troop'] 
			&& $phone==$_SESSION['phone']
			&& $password==$_SESSION['pass']) {

			$query = "UPDATE times SET $spot=1, 
						$troop_take = " . $_SESSION['troop'] .
					"WHERE location_id = '$location' AND day_of = '$day'"
			$result = mysql_query($query);
			if ($result) {
				echo "You have successfully reserved the timeslot.";
				
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
?>
