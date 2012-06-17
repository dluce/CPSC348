<!-- take_spot.php
This form is used to sign-up for a time slot for a cookie booth at the selected location.
-->
<?php
	include ('htmlheader.php');
?>

	<h2> Time Slot Verification </h2>
	<h3> Please enter the information below to verify you 
		are the registered person, and confirm the time slot. </h3>
	<form name="myform" method="post" action="takeSpotScript.php">

		Name: <input type="text" name="name"
			 maxlength="38" /> <br /><br />
		Phone Number: <input type="text" name="phone" size="9"
			maxlength="10" /><br /><br />
		Troop Number: <input type="text" name="troop" 
			size="3" maxlength="4" /><br /><br />
		Password: <input type="password" name="password" 
			maxlength="22" />	
	</form>
	<p> PLEASE use the SAME information you used to register,
		 or you will not be allowed to obtain the time slot. </p>

<?php
	include ('htmlfooter.php');
?>
