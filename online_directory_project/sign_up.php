<?php
if(isset($_POST['buttonsignup'])){
	$error=0;

	if(isset($_POST['txtusername']) && $_POST['txtusername']!=''){
		$usrname = $_POST['txtusername'];


		include('includes/connection.php');
		$query = "SELECT username FROM login_table WHERE username='".$usrname."'";

		    $result=mysqli_query($query);
		    print '<pre>'.print_r($query, 1).'</pre>';
		   if (mysql_num_rows($query) != 0)
		   {
		     echo "Username already exists";
		    }


	}else{
		echo "Username field cannot be empty";
		$error=1;
	}

	if(isset($_POST['txtpassword']) && $_POST['txtpassword']!=''){
		$passwrd = hash('sha512',$_POST['txtpassword']);
		
	}else{
		echo 'Password field cannot be empty';
		$error=1;
	}

	if(isset($_POST['access_level']) && $_POST['access_level']!=''){
		$usertype = $_POST['access_level'];
		//print '<pre>'.print_r($usertype, 1).'</pre>';
		if($usertype=='company'){
			$access_level = '2';
			$target = 'company_registration.php';
		}else{
			$access_level = '3';
			$target = 'user_registration.php';
		}
	}
	else{
	
		echo 'User Type field cannot be empty';
		$error=1;
	}

	if($error==0){
		include('includes/connection.php');
		if($proceed){
			$sign_up = "INSERT INTO login_table VALUES('','$usrname','$passwrd',$access_level)";
			if(mysqli_query($mysqli,$sign_up)){
				$log_id = mysqli_insert_id($mysqli);
				$url = $target.'?lid='.$log_id;
				header('Location:'.$url);
			}
		}
	}
}

?>