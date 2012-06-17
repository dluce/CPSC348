<?php
	session_start();
	ob_start();
	include ('db_connect.php');
	$name = $_POST['username'];
	$pass = $_POST['password'];
		
	$query = "SELECT * FROM users WHERE username='$name' AND password=SHA('$pass')";
	$result = mysql_query($db,$query);
	if($row = mysql_fetch_array($result))
	{
		$_SESSION['username'] = $name;
		header ("Location: home.php");
		ob_end_flush();
	}
	else
	{
		header ("Location: login.php?error");
		ob_end_flush();
	}
?>