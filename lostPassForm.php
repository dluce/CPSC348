<?php
//lostPassForm.php
//form for password recovery, linked to its script and the login page
	include ('htmlheader.php');
?>
	<h2> ONLY use this form if you cannot remember your password.</h2>
	<h3> Your password will be PERMANENTLY changed. </h3>
	<p> Fill in the form with the information you used to sign-up.
		Fill in your desired password, and REMEMBER IT! </p>

	<form method="post" action="lostPassword.php">
	<p>	
		Troop Number: <input type="text" name="troop" size="2" maxlength="4" /><br /><br />
		Name: <input type="text" name="name" size="23" maxlength="40"/><br /><br />
		Phone Number: <input type="text" name="phone" size="9" maxlength="10" /><br /><br />
		E-mail: <input type="text" name="email" size="14" /><br /><br />
		Username: <input type="text" name="user" size="12" maxlength="15" />
		<br />	
		<br />
		<br />
		<br />
		New Password: <input type="password" name="newpass" size="15" maxlength="22" /><br /><br />
		Re-Type it: <input type="password" name="checkpass" size="18" maxlength="22" />
		<br /> <br />
		<input type="submit" value="Set Password" />
	</p>
	</form>
<?php
	include ('htmlfooter.php');
?>

