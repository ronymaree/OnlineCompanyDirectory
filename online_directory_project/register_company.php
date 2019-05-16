<?php
	include("includes/connection.php");


	if (isset($_POST['submit'])){


		$company_name=$_POST['txtcompanyname'];
		$brn=$_POST['txtbrn'];
		$main_town=$_POST['cbomaintown'];
		$address=$_POST['txtaddress'];
		$zip_code=$_POST['txtzipcode'];
		$no_of_employees=$_POST['txtnumemployees'];
		$first_name=$_POST['txtfirstname'];
		$last_name=$_POST['txtlastname'];
		$email=$_POST['email'];
		$tel_mobile=$_POST['txttelmob'];
		$tel_other=$_POST['txttelother'];
		$fax=$_POST['txtfax'];
		$website=$_POST['txtwebsite'];
		$login_id = $_POST['login_id'];
		$i = 0;
		foreach($_POST as $k=>$p){
			if(substr($k,0,7)=='service'){
				$ser_id = str_replace("service", "", $k);
				foreach($_POST['select'.$ser_id] as $x=>$y){
					$combination[$p][] = $y;	
				}
				 
			}
		}
		//print_r($combination);
		//die('end');
		
		$query="INSERT INTO company_table(login_id,company_name,brn,main_town,address,zip_code,no_of_employees,first_name,last_name,email,tel_mobile,tel_other,fax,website) VALUES($login_id,'$company_name','$brn','$main_town','$address','$zip_code','$no_of_employees','$first_name','$last_name','$email','$tel_mobile','$tel_other','$fax','$website')";


		if(mysqli_query($mysqli,$query)){
			$comp_id = mysqli_insert_id($mysqli);
			foreach($combination as $ser=>$cat){
				foreach($cat as $c){
					$que_combi = "INSERT INTO combination_table VALUES('',$ser,$c,$comp_id)";
					$res =mysqli_query($mysqli,$que_combi);
				}
			}
			
			print "Insert successful";
		}else{
			print"Error inserting the data";
		}
	}

	?>


