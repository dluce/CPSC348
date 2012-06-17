<?php
	include ('htmlheader.php');
?>	
	<h2>Login</h2>
	<form method="post" action="loginc.php">
		Enter Username: <input type="text" id="username" name="username" /><br /><br />
		Password: <input type="password" id="password" name="password" /><br /><br />
		<input type="submit" value="Login" name="submit" />
	</form>
	<br />
	<br />
	<br />
	<p> Click the button below to reset your password in case you forgot it. <br /><br />
		<a href="lostPassForm.php"><img src="http://www.wsalometutoring.com/images/forget_img.jpg" alt="Recover your password">
			</img></a>
	</p>		
<?php
	include ('htmlfooter.php');
?>
