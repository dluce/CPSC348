<?php
	include ('htmlheader.php');
?>	
	<h2>Login</h2>
	<form method="post" action="loginc.php">
		Enter Username: <input type="text" id="username" name="username" /><br /><br />
		Password: <input type="password" id="password" name="password" /><br /><br />
		<input type="submit" value="Login" name="submit" />
	</form>
	<form method="post" action="lostPassword.php">
		<p> If you forgot your password, put your Username and E-mail that
			you registered with here, and your password will be sent.
			Please remeber your password, and delete that e-mail after you read it. </p>
		Username: <input type="text" name="username" /><br /><br />
		E-mail: <input type="text" name="email" /><br /><br />
	</form>
<?php
	include ('htmlfooter.php');
?>
