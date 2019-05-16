<?php 
if(isset($_POST['action']) && $_POST['action']=='company_registration_update'){
	include("includes/connection.php");

	if($proceed){
		$company_id = $_POST['company_id'];
		$query = "SELECT * FROM company_table WHERE company_id=$company_id";
		$result = mysqli_query($mysqli,$query);
		$res = mysqli_fetch_assoc($result);
		
		echo json_encode(array('reply'=>$res));
	}
}

?>