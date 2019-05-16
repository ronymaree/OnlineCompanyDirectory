<?php
	include("includes/connection.php");


	$login_id = $user['login_id'];

    //action=accept_or_reject&quote_id='.$row['quote_id'].'&opt=Accepted

    if(isset($_GET['action']) && $_GET['action'] == 'accept_or_reject'){
        $status = $_GET['opt'];
        $quote_id = $_GET['quote_id'];
        $request_id = $_GET['request_id'];

        $sql = "UPDATE quote_table SET quote_status= '$status' WHERE quote_id = $quote_id";

        if (mysqli_query($mysqli, $sql)) {

            if($status != 'Rejected'){
                $sql = "UPDATE quote_table SET quote_status= 'Rejected' WHERE request_id = $request_id AND quote_id <> $quote_id";

                mysqli_query($mysqli, $sql);
            }


        }





    }

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



$sql = "SELECT * FROM quote_table qt, request_table rt, category_table ct, services_table st WHERE rt.request_id = qt.request_id AND ct.cat_id = rt.category_id AND st.service_id = rt.service_id AND rt.customer_id = $login_id";
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
            print '<th>Options</th>';
    	print '<tr>';
    while($row = mysqli_fetch_assoc($result)) {
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
                print '<td>';
                    if(!$row['quote_status'] == 'Rejected'){
                        print '<a href="userprofile.php?page=customerquotes&action=accept_or_reject&quote_id='.$row['quote_id'].'&request_id='.$row['request_id'].'&opt=Accepted">Accept</a> | <a href="userprofile.php?page=customerquotes&action=accept_or_reject&quote_id='.$row['quote_id'].'&request_id='.$row['request_id'].'&opt=Rejected">Reject</a>';
                    }
                    else{
                        print $row['quote_status'];
                    }

                print '</td>';

    		print '</tr>';
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    print '</table>';
} else {
    //echo "0 results";
}





	?>


