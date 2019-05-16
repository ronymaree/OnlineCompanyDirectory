<?php
	$username = "root";
	$password = "";
	$db = "osdm_project";
	$host= "localhost";
	$proceed = true;
	$mysqli=mysqli_connect($host,$username,$password,$db);

	if(mysqli_error($mysqli)){
		print "Error coonecting to database";
		$proceed = false;
		exit;
	}
	?>