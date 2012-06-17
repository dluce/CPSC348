<?php
	include ('htmlheader.php');
	if(isset($_POST['name'])){
		$location = $_POST['name'];
		echo "$location";
	}
?>
	<h2></h2>
<?php	
	include ('htmlfooter.php');
?>