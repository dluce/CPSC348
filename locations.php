<?php
	include ('htmlheader.php');
	if(isset($_GET['location'])){
		$location = $_GET['location'];
		echo "$location";
	}
?>
	<h2></h2>
<?php	
	include ('htmlfooter.php');
?>