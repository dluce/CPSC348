<?php
//lostPassword.php
	//Script file for recovering a lost password
	
	include ('htmlheader.php');
	include ('db_connect.php');

	$troop = $_POST['troop'];
	$user = $_POST['user'];
	$email = $_POST['email'];
	$phone = $_POST['phpne'];
	$name = $_POST['name'];
	$pass = $_POST['newpass'];
	$check = $_POST['checkpass'];
	
	$query = "SELECT * FROM users WHERE username='$user',scout_master_name='$name',phone='$phone',email='$email',troop_number='$troop'";
	$result = mysql_query($query);
	if ($row = mysql_fetch_array($result)) {
		if ($pass==$check) {
			$query = "UPDATE users SET password=SHA('$pass') WHERE username='$user',phone='$phone',email='$email'
				scout_master_name='$name',troop_number='$troop'";
			$result = mysql_query($query)
			echo "<p>Password updated successfully.</p>"
			include ('htmlfooter');
		}

	} else {
		echo "We did not find anyone registered with that Username and email.<br /><br /> Please try again!";
		include ('htmlfooter');
	}
	
	include ('htmlfooter');
?>
