<?php
	include ('htmlheader.php');
?>	
	<h2>Login</h2>
	<form method="post" action="loginc.php">
		Enter Username: <input type="text" id="username" name="username" /><br /><br />
		Password: <input type="password" id="password" name="password" /><br /><br />
		<input type="submit" value="Login" name="submit" />
	</form>
<<<<<<< HEAD
	<br />
	<br />
	<br />
	<p> Click the button below to reset your password in the case that you forgot it. <br /><br />
		<a href="lostPassForm.php"><img src="http://www.wsalometutoring.com/images/forget_img.jpg" alt="Recover your password">
			</img></a>
	</p>		
=======
	<form method="post" action="lostPassword.php">
		<p> If you forgot your password, put your Username and E-mail that
			you registered with here, and your password will be sent.
			Please remember your password, and delete that e-mail after you read it. </p>
		Username: <input type="text" name="username" /><br /><br />
		E-mail: <input type="text" name="email" /><br /><br />
	</form>
>>>>>>> bf4798d44edd88f3af80bccc517acc661aa991cf
<?php
	include ('htmlfooter.php');
?>
