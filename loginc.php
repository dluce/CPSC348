<?php
//loginc.php: used with login.php to validate a user's information and 
//store information in session variables
	include('htmlheader.php');
	include ('db_connect.php');
	$u = $_POST['username'];
	$p = $_POST['password'];
		
	$query = "SELECT * FROM users WHERE username='$u' AND password=SHA('$p')";
	$result = mysql_query($db,$query);
	if($row = mysql_fetch_array($result))
	{
		$_SESSION['username'] = $u;
		$_SESSION['realname'] = $row['scout_master_name'];
		$_SESSION['troop'] = $row['troop_number'];
		echo "<p><h2>Successful Login.</h2> <br />
			You may now: <br />
			<ul>
				<li>Sign Up for time slots in cookie booths.</li>
				<li>Edit your current time slot. </li>
				<li>Add locations to the database. </li>
			</ul> ";
	}
	else
	{
		echo "<p><h2>Login Failed.</h2> <br />
			Make sure you entered your username and password correctly, <br />
			or sign up <a href=\"register.php\" >here.</a> ";
	}
?>