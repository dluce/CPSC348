<?php
	include ('htmlheader.php');
?>

    <h2> Scoutmaster Sign-up Form </h2>
    <h3> NOTE: Only register if you are a scout master. Only one person may register per troop! </h3>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
       	<form id="myForm" method="post" action="registerScript.php">
			<p>
				Name: <input type="text" name="name" maxlength="38" /><br /> <br />
				Phone #:<input type="text" name="phone" size="10" maxlength="10" /> <br /> <br />
				Troop Number: <input type="text" name="troop" size="3" maxlength="4" /> <br /> <br />
				E-Mail: <input type="text" size="15" maxlength="35" name="email" /> <br /><br />
				Username:<input type="text" name="user" maxlength="14" /> <br /> <br />
				Password:<input type="password" name="pass1" maxlength="22" /><br /><br />
				Re-type Password:<input type="password" name="pass2" maxlength="22" /><br /><br />
			</p>
		</form>	
		<button type="submit" onclick="registerScript.php"> Register Now </button>	
	<p>&nbsp;</p>
<?php
	include ('htmlfooter.php');
?>