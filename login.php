<?php
	include ('htmlheader.php');
?>	
	<h2>Login</h2>
	<form method="post" action="loginc.php">
		Enter Username: <input type="text" id="username" name="username" /><br /><br />
		Password: <input type="password" id="password" name="password" /><br /><br />
		<input type="submit" value="Login" name="submit" />
	</form>
<?php
	include ('htmlfooter.php');
?>