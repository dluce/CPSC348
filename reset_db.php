<?php
	include ('htmlheader.php');
	
	if(isset($_POST['submit'])){
		for($i = 1; $i < 6; $i++){
			//sets every part of the table except location and day to 0,
			//which gets rid of any scheduling info but keeps locations
			//and associated info intact
			$query = "UPDATE times SET time$i = 0,
				troop_number$i = NULL WHERE 1=1";
			$result = mysql_query($query) or die (mysql_error());
		}
		//sets the entire current_time_slot column in users to
		//the empty string
		$query = "UPDATE users SET current_time_slot = '' WHERE 1=1";
		$result = mysql_query($query) or die (mysql_error());
		?>
		<h3> Schedule has been reset. </h3>
		<?php
		include ('htmlfooter.php');
		exit();
	}
	elseif(isset($_SESSION['username'])
		&& $_SESSION['username'] == "admin"){
		?>
		<h2>Scheduling Reset</h2> <br />
		<h3> All changes to the database are final. Be
			absolutely sure that you want to reset the 
			schedule before pushing this button. </h3><br />
		<form method="post" action="reset_db.php">
			<input type="submit" name="submit" value="Reset Schedule" /><br />
		</form>
	<?php
		include ('htmlfooter.php');
		exit();
	}
	else {
		echo "<h3>Only the Administrator Account may 
			use this functionality. </h3>";
		include ('htmlfooter.php');
		exit();
	}
?>