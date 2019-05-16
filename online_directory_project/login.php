<?php
	include("includes/connection.php");
session_start();

if (isset($_POST['buttonsignin'])){

	$username=$_POST['txtusername'];
	$password = hash('sha512',$_POST['txtpassword']);
	$access_level=$_POST['access_level'];

	$sql = "SELECT * FROM login_table WHERE username='$username' and password='$password' AND access_level = ". $access_level;

	$result = mysqli_query($mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {

		$row = mysqli_fetch_assoc($result);
		
		$_SESSION['userid']=$row['login_id'];
		$_SESSION['access_level']=$row['access_level'];

		if($row['access_level'] == '3'){
			header ('Location:userprofile.php');
		}
		elseif($row['access_level'] == '2'){
			header ('Location:companyprofile.php');
		}
		elseif($row['access_level'] == '1'){
			header ('Location:adminprofile.php');
		}

	}
	else {
		header ('Location:index.php?login_error=1');
	}

	mysqli_close($mysqli);
}
?>


