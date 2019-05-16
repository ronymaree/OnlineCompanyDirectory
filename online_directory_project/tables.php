<div class="table">




<p><strong>Category Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Category ID</th>
    <th>Category</th>     
  </tr> 
    <?php
      $sql_category = "SELECT * FROM category_table";
      $result_category = mysqli_query($mysqli, $sql_category);
      if (mysqli_num_rows($result_category) > 0) {
        while($row_category = mysqli_fetch_assoc($result_category)) {
      
          print '<tr>';
          print '<td>'.$row_category['cat_id'].'</td>';
          print '<td>'.$row_category['category'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
       else {
      echo "0 results";
    }
    ?>
</table>
   <br></br>
<p><strong>Combination Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Combination ID</th>
    <th>Service ID</th> 
    <th>Category ID</th> 
    <th>Company ID</th> 
  </tr> 
    <?php
      $sql_combination = "SELECT * FROM combination_table";
      $result_combination = mysqli_query($mysqli, $sql_combination);
      if (mysqli_num_rows($result_combination) > 0) {
        while($row_combination = mysqli_fetch_assoc($result_combination)) {
        
          print '<tr>';
          print '<td>'.$row_combination['combination_id'].'</td>';
          print '<td>'.$row_combination['service_id'].'</td>';
          print '<td>'.$row_combination['cat_id'].'</td>';
          print '<td>'.$row_combination['company_id'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>
<br></br>
<p><strong>Company Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Company ID</th>
    <th>Login ID</th>
    <th>Company Name</th> 
    <th>BRN No</th> 
    <th>Main Town ID</th> 
    <th>Address</th> 
    <th>Zip Code</th> 
    <th>N. Emp</th>  
    <th>1st Name</th> 
    <th>Last Name</th> 
    <th>Email</th> 
    <th>Mobile</th>
    <th>Other Tel</th> 
    <th>Fax</th>  
    <th>Website</th> 
    <th>Rating</th>   
  </tr> 


    <?php
      $sql_company = "SELECT * FROM company_table";
      $result_company = mysqli_query($mysqli, $sql_company);
      if (mysqli_num_rows($result_company) > 0) {
        while($row_company = mysqli_fetch_assoc($result_company)) {
          
          print '<tr>';
          print '<td>'.$row_company['company_id'].'</td>';
          print '<td>'.$row_company['login_id'].'</td>';
          print '<td>'.$row_company['company_name'].'</td>';
          print '<td>'.$row_company['brn'].'</td>';
          print '<td>'.$row_company['main_town'].'</td>';
          print '<td>'.$row_company['address'].'</td>';
          print '<td>'.$row_company['zip_code'].'</td>';
          print '<td>'.$row_company['no_of_employees'].'</td>';
          print '<td>'.$row_company['first_name'].'</td>';
          print '<td>'.$row_company['last_name'].'</td>';
          print '<td>'.$row_company['email'].'</td>';
          print '<td>'.$row_company['tel_mobile'].'</td>';
          print '<td>'.$row_company['tel_other'].'</td>';
          print '<td>'.$row_company['fax'].'</td>';
          print '<td>'.$row_company['website'].'</td>';
          print '<td>'.$row_company['company_rating'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>
<br></br>
</table>

<p><strong>Customer Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Customer ID</th>
    <th>Login ID</th>
    <th>First Name</th> 
    <th>Last Name</th> 
    <th>DOB</th> 
    <th>Tel Mobile</th> 
    <th>Mobile</th>
    <th>Email</th> 
    <th>User Rating</th>   
  </tr> 


    <?php
      $sql_customer = "SELECT * FROM customer_table";
      $result_customer = mysqli_query($mysqli, $sql_customer);
      if (mysqli_num_rows($result_customer) > 0) {
        while($row_customer = mysqli_fetch_assoc($result_customer)) {
         
          print '<tr>';
          print '<td>'.$row_customer['customer_id'].'</td>';
          print '<td>'.$row_customer['login_id'].'</td>';
          print '<td>'.$row_customer['first_name'].'</td>';
          print '<td>'.$row_customer['last_name'].'</td>';
          print '<td>'.$row_customer['dob'].'</td>';
          print '<td>'.$row_customer['tel_mob'].'</td>';
          print '<td>'.$row_customer['email'].'</td>';
          print '<td>'.$row_customer['user_rating'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>


<br></br>
</table>

<p><strong>Login Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Login ID</th>
    <th>Username</th> 
    <th>Password</th> 
    <th>Access Level</th> 
  </tr> 


    <?php
      $sql_login = "SELECT * FROM login_table";
      $result_login = mysqli_query($mysqli, $sql_login);
      if (mysqli_num_rows($result_login) > 0) {
        while($row_login = mysqli_fetch_assoc($result_login)) {
        
          print '<tr>';
          print '<td>'.$row_login['login_id'].'</td>';
          print '<td>'.$row_login['username'].'</td>';
          print '<td>'.$row_login['password'].'</td>';
          print '<td>'.$row_login['access_level'].'</td>';
          
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>


<br></br>
</table>

<p><strong>Quote Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Quote ID</th>
    <th>Request ID</th>
    <th>Company ID</th> 
    <th>Quote Date</th> 
    <th>Amount</th> 
    <th>Comments</th> 
    <th>Quote Status</th>   
  </tr> 


    <?php
      $sql_quote = "SELECT * FROM quote_table";
      $result_quote = mysqli_query($mysqli, $sql_quote);
      if (mysqli_num_rows($result_quote) > 0) {
        while($row_quote = mysqli_fetch_assoc($result_quote)) {
         
          print '<tr>';
          print '<td>'.$row_quote['quote_id'].'</td>';
          print '<td>'.$row_quote['request_id'].'</td>';
          print '<td>'.$row_quote['company_id'].'</td>';
          print '<td>'.$row_quote['quotedate'].'</td>';
          print '<td>'.$row_quote['amount'].'</td>';
          print '<td>'.$row_quote['comments'].'</td>';
          print '<td>'.$row_quote['quote_status'].'</td>';

          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>


</table>
<br></br>
<p><strong>Request Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Request ID</th>
    <th>Customer ID</th>
    <th>Date of Request</th> 
    <th>Category ID</th> 
    <th>Service ID</th> 
    <th>Description</th> 
    <th>Main Town</th> 
    <th>Address</th>  
    <th>Budget</th> 
    <th>Date of Closure</th> 
    <th>Due Date</th>   
  </tr> 


    <?php
      $sql_request = "SELECT * FROM request_table";
      $result_request = mysqli_query($mysqli, $sql_request);
      if (mysqli_num_rows($result_request) > 0) {
        while($row_request = mysqli_fetch_assoc($result_request)) {
       
          print '<tr>';
          print '<td>'.$row_request['request_id'].'</td>';
          print '<td>'.$row_request['customer_id'].'</td>';
          print '<td>'.$row_request['date_of_request'].'</td>';
          print '<td>'.$row_request['category_id'].'</td>';
          print '<td>'.$row_request['service_id'].'</td>';
          print '<td>'.$row_request['description'].'</td>';
          print '<td>'.$row_request['main_town'].'</td>';
          print '<td>'.$row_request['address'].'</td>';
          print '<td>'.$row_request['budget'].'</td>';
          print '<td>'.$row_request['date_of_closure'].'</td>';
          print '<td>'.$row_request['due_date'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
     else {
      echo "0 results";
    }
    ?>
</table>
<br></br>
<p><strong>Services Table</strong></p>
<table id="table">
  <tr class="header">
    <th>Service ID</th>
    <th>Service</th>     
  </tr> 
    <?php
      $sql_service = "SELECT * FROM services_table";
      $result_service = mysqli_query($mysqli, $sql_service);
      if (mysqli_num_rows($result_service) > 0) {
        while($row_service = mysqli_fetch_assoc($result_service)) {
       
          print '<tr>';
          print '<td>'.$row_service['service_id'].'</td>';
          print '<td>'.$row_service['service'].'</td>';
          //print '<td><a href="index.php?page=adminprofile&cat_id='.$row_category["cat_id"].'">Edit</a> | <a href="index.php?page=members&option=delete&member_id='.$row["member_id"].'">Delete</a></td>';
          print '</tr>';
        }
      }
       else {
      echo "0 results";
    }
    ?>
</table>

<script>
$('.header').click(function(){
   $(this).find('span').text(function(_, value){return value=='-'?'+':'-'});
    $(this).nextUntil('tr.header').slideToggle(100, function(){
    });
});
</script>

</div>