<!-- take_spot.php
This form is used to sign-up for a time slot for a cookie booth at the selected location.
-->
<?php
	include ('htmlheader.php');
	$spot = $_GET['spot'];
	$day = $_GET['day'];
?>

	<h2> Time Slot Verification </h2>
	<h3> Please enter the information below to verify you 
		are the registered person, and confirm the time slot. </h3>
	<form id="myform" method="post" action="takeSpotScript.php">

		User Name: <input type="text" name="name"
			 maxlength="38" /> <br /><br />
		Phone Number: <input type="text" name="phone" size="9"
			maxlength="10" /><br /><br />
		Troop Number: <input type="text" name="troop" 
			size="3" maxlength="4" /><br /><br />
		Password: <input type="password" name="password" 
			maxlength="22" />
		<input type="hidden" name = "spot" 
			value="<?php echo "$spot"; ?>" />
		<input type="hidden" name="day" 
			value="<?php echo "$day"; ?>" />
	</form>
	<p> PLEASE use the SAME information you used to register,
		 or you will not be allowed to obtain the time slot. </p>

<?php
	include ('htmlfooter.php');
?>
