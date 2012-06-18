<?php
	include ('htmlheader.php');
	session_start();
	include ('db_connect.php');
	
	if (isset($_SESSION['username'])){
		$query = "SELECT * FROM users WHERE username=" . $_SESSION['username'];
		
		$result = mysql_query($query) or die (mysql_error());
		if ($row = mysql_fetch_array($result)){
			$query = "UPDATE users SET current_time_slot = 0 
				WHERE username =" .$_SESSION['username'];
			