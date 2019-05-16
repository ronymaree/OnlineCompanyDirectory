<?php
	include("includes/connection.php");


	if (isset($_POST['submit'])){

		$first_name=$_POST['txtfirstname'];
		$last_name=$_POST['txtlastname'];
		$dob=$_POST['txtdob'];
		$tel_mob=$_POST['txtmobnum'];
		$email=$_POST['txtemail'];
		$login_id = $_POST['login_id'];
		
		$query="INSERT INTO customer_table(login_id,first_name,last_name,dob,tel_mob,email) VALUES($login_id,'$first_name','$last_name','$dob','$tel_mob','$email')";


		if(mysqli_query($mysqli,$query)){
			print "Insert successful";
		}else{
			print"Error inserting the data: ".mysqli_error($mysqli);
		}
	}

	?>


