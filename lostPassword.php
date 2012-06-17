<?php
//lostPassword.php
	//Script file for recovering a lost password
	
	include ('htmlheader.php');
	include ('db_connect.php');

	$user = $_POST['user'];
	$email = $_POST['email'];

	$query = "SELECT * FROM users WHERE username='$user', email='$email'";
	$result = mysql_query($query);
	if ($row = mysql_fetch_array($result)) {
		$pass = $row[5];
		
		mail($email,"Cookie Booth Reservation Password - DELETE AFTER READING", "Dear ". $user .", <br />
			If you did not request this e-mail, please delete it immediately. If you requested your
			password because you forgot it, please remember it, and delete this e-mail. Your password is below:
			<br /> <br />
			Username: " . $user . " <br /><br />
			Password: " . $pass . " <br /><br /><br /><br /><br />

			I hope you enjoy using the site! <br />
			Sincerely, <br />
			Site Administration");
	} else {
		echo "We did not find anyone registered with that Username and email.<br /><br /> Please try again!";
	}
	
	include ('htmlfooter');
?>
