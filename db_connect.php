<?php
	$db = @mysql_connect('localhost', 'dluce', 'gurren5');
	if(!$db) {
		die ("<p> Unable to connect to the database system.<br />" .
			"Please try again later. </p>");
		include ('htmlfooter.php');
		exit();
	}
	if (! @mysql_select_db('S12-CPSC348_dluce')) {
		echo ("<p> Unable to connect to the database.<br />" . 
			"Please try again later. </p>");
		include ('htmlfooter.php');
		exit();
	}
?>