<?php
	include ('htmlheader.php');
	$spot = $_GET['spot'];
	$day = $_GET['day'];
	$location = $_GET['location'];
?>
<!-- take_spot.php
This form is used to sign-up for a time slot for a cookie booth at the selected location.
-->
	<h2> Time Slot Verification </h2>
	<h3> Please enter the information below to verify you are registered 
		and logged in, and confirm the time slot. Only one time slot per troop
		is allowed.</h3>
	<form id="myform" method="post" action="takeSpotScript.php">

		User Name: <input type="text" name="name"
			 maxlength="38" /> <br /><br />
		Phone Number: <input type="text" name="phone" size="9"
			maxlength="10" /><br /><br />
		Troop Number: <input type="text" name="troop" 
			size="3" maxlength="4" /><br /><br />
		Password: <input type="password" name="password" 
			maxlength="22" /><br /> <br />
		
		<!-- carry over all the spot information to the next page -->
		<input type="hidden" name = "spot" 
			value="<?php echo "$spot"; ?>" />
		<input type="hidden" name="day" 
			value="<?php echo "$day"; ?>" />
		<input type="hidden" name = "location_id" 
			value="<?php echo "$location"; ?>" />
			
		<input type="submit" name="submit" value = "Take Time Slot" /><br /><br />
	</form>
	<p> PLEASE use the SAME information you used to register,
		 or you will not be allowed to obtain the time slot. </p>

<?php
	include ('htmlfooter.php');
?>
