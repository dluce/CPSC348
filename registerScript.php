<!--	registerScript.php	-->
<?php
	include ('htmlheader.php');
	include('mydbinfo.php');
	$con = @mysql_connect($dbhost,$dbuser,$dbpass);
	if(!$con) {
		die ("<p> Unable to connect to the database system.<br />" .
			"Please try again later. </p></body></html>");
		exit();
	}
	if (! @mysql_select_db($dbname) ) {
		echo ("<p> Unable to connect to the database.<br />" . 
			"Please try again later. </p></body></html>");
		exit();
	}
	//check to see if any of the fields are empty.
	//if not, then continue processing request
	if (empty($_POST['name'] && 
			$_POST['phone'] && 
			$_POST['troop'] && 
			$_POST['email'] && 
			$_POST['user'] && 
			$_POST['pass1'] && 
			$_POST['pass2'])) {
		echo ("<p> All information is required. Please check and make 
			sure you enter your info! </p></body></html>");
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
				Scoutmaster " . $name . ".</p></body></html>");
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
					"Please select a different one. </p></body></html>");
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
							'$pass')";
					$result = mysql_query($query) or die (mysql_error());
					echo ("You are now registered to use the site. 
							Please remember your UN and Password.");
				} else {
					echo ("<p> Your password entries do not match.<br />" .
						"Please re-type your password, and then double check. </p></body></html>");
					exit();
				}
			}
		}
	}
?>
