<?php
	//This is the script file, used to verify the user's identity
	include ('htmlheader.php');
	include ('db_connect.php');
	//contains all information for connecting to the database
	//including error messages
	
	if ( empty($_POST['troop']) && empty($_POST['phone']) 
		&& empty($_POST['name']) && empty($_POST['password'])) {
		
		echo "<p> All information is required! </p>"
		include ('htmlfooter');
		exit();
	}
	else {
		$name = $_POST['name'];
		$troop = $_POST['troop'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];

		$Sname = $_SESSION['name'];
		$Stroop = $_SESSION['troop'];
		$Sphone = $_SESSION['phone'];
		$Spassword = $_SESSION['pass'];

		$spot = $_GET['spot'];
		$day = $_GET['day'];

		if ($name==$Sname && $troop==$Stroop && $phone==$Sphone 
			&& $password==$Spassword) {

			$query = "SELECT * FROM locations WHERE
				 spot='$spot',day='$day'"
			$result = mysql_query($query);
			if ($row= mysql_fetch_array($array)) {
				$query = "INERT INTO locations
					 SET troop_id='$troop'
					 WHERE '$spot'=spot, '$day'=day"
				$result = mysql_query($query);
				if ($row = mysql_fetch_array($result) {
					echo "You have successfully reserved the timeslot.";
				}
			}
		}
	}
?>
