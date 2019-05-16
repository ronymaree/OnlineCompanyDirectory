<?php
	include("includes/connection.php");


	$company_id = $user['company_id'];

	if (isset($_POST['submit'])){


		$request_id=$_POST['request_id'];
		$company_id=$_POST['company_id'];
		$date=date('Y-m-d'); 
		$amount=$_POST['amount'];
		$comments=$_POST['comments'];
		
	
		
		$query="INSERT INTO quote_table(request_id,company_id,quotedate,amount,comments) VALUES('$request_id','$company_id','$date','$amount','$comments')";



		if(mysqli_query($mysqli,$query)){
			print "Insert successful";
		}else{
			print"Error inserting the data: ".mysqli_error($mysqli);
		}
	}



$sql = "SELECT * FROM quote_table qt, request_table rt, category_table ct, services_table st WHERE rt.request_id = qt.request_id AND ct.cat_id = rt.category_id AND st.service_id = rt.service_id AND qt.company_id = $company_id";
$result = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    print '<table>';
    	print '<tr>';
    		print '<th>Date of request</th>';
    		print '<th>Category</th>';
    		print '<th>Service</th>';
    		print '<th>Description</th>';
    		print '<th>Budget</th>';
    		print '<th>Closure Date</th>';
    		print '<th>Due Date</th>';
    		print '<th>Amount</th>';
    		print '<th>Comments</th>';
    		print '<th>Status</th>';

    	print '<tr>';
    while($row = mysqli_fetch_assoc($result)) {
    	//print '<pre>'.print_r($row, 1).'</pre>';

    		print '<tr>';
    			print '<td>'.date('Y m d', strtotime($row['date_of_request'])).'</td>';
    			print '<td>'.$row['category'].'</td>';
    			print '<td>'.$row['service'].'</td>';
    			print '<td>'.$row['description'].'</td>';
    			print '<td>'.$row['budget'].'</td>';
    			print '<td>'.date('Y m d', strtotime($row['date_of_closure'])).'</td>';
    			print '<td>'.date('Y m d', strtotime($row['due_date'])).'</td>';
    			print '<td>'.$row['amount'].'</td>';
    			print '<td>'.$row['comments'].'</td>';
    			print '<td>'.$row['quote_status'].'</td>';
    		print '</tr>';
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    print '</table>';
} else {
    //echo "0 results";
}





	?>


