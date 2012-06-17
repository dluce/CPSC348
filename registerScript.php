<!--	registerScript.php	-->
<?php
	include ('htmlheader.php');
	include('db_connect.php'); //db_connect has all the stuff for
			//connection error messages

	//check to see if any of the fields are empty.
	//if not, then continue processing request
	if (empty($_POST['name']) && 
		empty($_POST['phone']) && 
		empty($_POST['troop']) && 
		empty($_POST['email']) && 
		empty($_POST['user']) && 
		empty($_POST['pass1']) && 
		empty($_POST['pass2'])) {
		echo ("<p> All information is required. Please check and make 
			sure you enter your info! </p>");
		include ('htmlfooter.php');
		exit();
	} 
	else {
		$troop = $_POST['troop'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$user = $_POST['user'];
		$pass = $_POST['pass1'];
		$check = $_POST['pass2'];
		
		//check to see if the troop has already been registered
		$query = "SELECT troop_number, email, scout_master_name, phone 
					FROM users WHERE '$troop'=troop_number 
					ORDER BY troop_number";
		$result = mysql_query($query);
		if($row = mysql_fetch_array($result)) {
			echo ("<p> I'm sorry, but your troop has already registered. 
				Troop number ". $troop . " is registered with the 
				Scoutmaster " . $name . ".</p>");
			include ('htmlfooter.php');
			exit();
		} 
		//if that checks out, then check to see if the username has 
		//been taken
		else {
			$query = "SELECT troop_number, username 
						FROM users 
						WHERE username='$user' 
						ORDER BY troop_number";
			$result = mysql_query($query) or die (mysql_error());
			
			if ($row = mysql_fetch_array($result)) {
				echo ("<p> The username you entered is alredy being used.<br /><br />" . 
					"Please select a different one. </p>");
				include ('htmlfooter.php');
				exit();
			} 
			//finally, if troop number and username check out, register
			else {
				if($pass == $check) {
					$query = "INSERT INTO users 
							(troop_number, scout_master_name, 
							phone, email, username, password)" .
							"VALUES ('$troop', '$name', 
							'$phone', '$email', '$user', 
							SHA('$pass'))"; // the SHA function hashes the password
											//into a 40-character string.
					$result = mysql_query($query) or die (mysql_error());
					echo ("You are now registered to use the site. 
							Please remember your Username and Password.");
				} else {
					echo ("<p> Your password entries do not match.<br />" .
						"Please re-type your password, and then double check. </p>");
					include ('htmlfooter.php');
					exit();
				}
			}
		}
	}
	include ('htmlfooter.php');
?>
