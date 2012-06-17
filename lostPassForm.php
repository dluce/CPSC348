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
	Troop Number: <input type="text" name="troop" maxlength="4" /><br />
	Name: <input type="text" name="name" /><br />
	Phone Number: <input type="text" name="phone" maxlength="10" /><br />
	E-mail: <input type="text" name="email" /><br />
	Username: <input type="text" name="user" />
	<br />	
	<br />
	<br />
	<br />
	New Password: <input type="password" name="newpass" maxlength="22" /><br />
	Re-Type it: <input type="password" name="checkpass" maxlength="22" />
	<br /> <br />
	<input type="submit" value="Change Password" />
	</form>
<?php
	include ('htmlfooter.php');
?>

