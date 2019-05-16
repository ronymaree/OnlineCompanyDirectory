<!doctype html>
<html>
<head>
	<title>Request for Quote</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

	<?php 
        include('includes/connection.php');
        if($proceed){
          $cat_query = "SELECT * FROM category_table ORDER BY category ASC";
          $cat_res = mysqli_query($mysqli,$cat_query);
          $output = "";
          while($cat = mysqli_fetch_assoc($cat_res)){
            $output .='<option value="'.$cat['cat_id'].'">'.$cat['category'].'</option>';
          }
          $customer_query= "SELECT * FROM customer_table ORDER BY first_name, last_name ASC "
          $cust_res = mysqli_query($mysqli,$customer_query);
          $service_query = "SELECT * FROM services_table ORDER BY service ASC";
          $ser_res = mysqli_query($mysqli,$service_query);
        }
    ?>

<div id="wrapper">
    <div id="main_content">
     
      <?php include('includes/top_header.php'); ?>
     
      <h1>Request for Quote</h1>
     
     <?php if(isset($_GET['lid']) && is_numeric($_GET['lid'])){ ?>

     <form id="form1" name="form1" method="post" action="get_quote.php">
     		<label>Customer Name:   </label>

        <?php 
          
            while($customername = mysqli_fetch_assoc($cus_res)){
              print '<label type="text" name="lblcustomername">'.$cust_res.'</label>';
              $service_counter++;
            } ?>

        <label type="text" name="lblcustomername"></label>
  
      </form>
    </div>
</div>
</body>
</html>