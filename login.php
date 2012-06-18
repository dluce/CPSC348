<?php
	if(isset($_POST['username']) 
		&& !empty($_POST['username'])
		&& isset($_POST['password']) 
		&& !empty($_POST['password'])){
		
		session_start();
		include ('db_connect.php');
		
		$u = $_POST['username'];
		$p = $_POST['password'];
			
		$query = "SELECT * FROM users WHERE username='$u' AND password=SHA('$p')";
		$result = mysql_query($query);
		if($row = mysql_fetch_array($result))
		{
			$_SESSION['username'] = $u;
			$_SESSION['realname'] = $row['scout_master_name'];
			$_SESSION['troop'] = $row['troop_number'];
			$_SESSION['phone'] = $row['phone'];
			//saves sha'd password to a session variable for later comparison
			$_SESSION['pass'] = sha1($p);
			
			$_SESSION['reserve'] = $row['current_time_slot'];
			
			//since login was successful, run normal page display
			//with a success message
			include ('htmlheader.php');
			
			//check to see if it is the admin account
			if ($_SESSION['username'] == "admin"){
				echo "<h2>Successful Login as Administrator.</h2>
					<h3> You may now: </h3>
					<p>
					<ul>
						<li>Sign Up for time slots in cookie booths.</li> <br />
						<li>Edit your current time slot. </li> <br />
						<li>Add locations to the database. </li> <br />
						<li>Reset the necessary fields in the database
							for schedule clearing</li> <br />
					</ul> 
					</p>";
				include ('htmlfooter.php');
				exit();
			}
			else {
				echo "<h2>Successful Login.</h2> <br />
					<h3> You may now: </h3> <br />
					<p>
					<ul>
						<li>Sign Up for time slots in cookie booths.</li> <br />
						<li>Edit your current time slot. </li> <br />
						<li>Add locations to the database. </li> <br />
					</ul> 
					</p>";
				include ('htmlfooter.php');
				exit();
			}
		}
		else
		{
			include ('htmlheader.php');
			echo "<h2>Login Failed.</h2> <br />
				<p>Make sure you entered your username and password correctly, <br />
				or sign up <a href=\"register.php\" >here.</a> 
				</p>";
			include ('htmlfooter.php');
			exit();
		}
	}
	else {
		include ('htmlheader.php');
	?>	
		<h2>Login</h2>
		<form method="post" action="login.php">
		<p>
			Enter Username: <input type="text" id="username" name="username" /><br /><br />
			Password: <input type="password" id="password" name="password" /><br /><br />
			<input type="submit" value="Login" name="submit" />
		</p>
		</form>
		<br />
		<br />
		<br />
		<p> Click the button below to reset your password in case you forgot it. <br /><br />
			<a href="lostPassForm.php"><img id = "small" src="http://www.wsalometutoring.com/images/forget_img.jpg" 
				alt="Recover your password" /></a>
		</p>		
	<?php
	}
	include ('htmlfooter.php');
?>
