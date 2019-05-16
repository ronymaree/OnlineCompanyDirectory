
<?php 
        /*
  
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
        }*/

if (isset($_POST['submitbtn'])){
include('includes/connection.php');
session_start();
print '<pre>'.print_r($_POST, 1).'</pre>';
print '<pre>'.print_r($_SESSION, 1).'</pre>';

$service = $_POST['service'];
$category = $_POST['category'];
$description = $_POST['description'];
$main_town = $_POST['main_town'];
$address = $_POST['address'];
$budget = $_POST['budget'];
$date_closure = $_POST['date_closure'];
$due_date = $_POST['due_date'];
$user_id=$_SESSION['userid'];

$sql = "INSERT INTO request_table (service_id, category_id, description, main_town, address, budget, date_of_closure, due_date, customer_id ) VALUES ('$service', '$category', '$description', '$main_town', '$address', '$budget', '$date_closure', '$due_date', '$user_id')";

  if (mysqli_query($mysqli, $sql)){
    header('location:userprofile.php?page=requests');
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }



}




    ?>

<div id="wrapper">
    <div id="main_content">
     
   
     
      <h1 class="titular">Request for Quote</h1>
     
     <?php /*if(isset($_GET['lid']) && is_numeric($_GET['lid'])){ ?>

     <form id="form1" name="form1" method="post" action="get_quote.php">
        <label>Customer Name:   </label>

        <?php 
          /*
            while($customername = mysqli_fetch_assoc($cus_res)){
              print '<label type="text" name="lblcustomername">'.$cust_res.'</label>';
              $service_counter++;
            } */?>

        <label type="text" name="lblcustomername"></label>

        <!-- 
This form re-write the request form of this article:
http://writer.dek-d.com/32kk/writer/viewlongc.php?id=1360303&chapter=1
-->
<form id="reqForm" method="post" action="newrequest.php">

<h2 class="titular">Details</h1>

<div class="row">
    <div class="form-group col-xs-12">
      <label for="rf-orderType">Services</label>



      <div id="rf-orderType" class="btn-group" data-toggle="buttons">

         <?php

            $sql = "SELECT * FROM services_table";
            $result = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    
                    print  '<label class="btn btn-default">
                            <input type="radio" value="'.$row['service_id'].'" name="service" id="rf-orderType'.$row['service_id'].'" autocomplete="off" >'.$row['service'].'</label>';


                }
              }


            ?>

       <!-- <label class="btn btn-default active">
          <input type="radio" name="orderType" id="rf-orderType1" autocomplete="off" checked>Service 1</label>
        <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType2" autocomplete="off">Service 2</label>
        <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType3" autocomplete="off">Service 3</label>
      <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType4" autocomplete="off">Service 4</label>
      <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType5" autocomplete="off">Service 5</label>-->
      
      </div>
    </div>
  </div>

    <div class="row">
    <div class="form-group col-xs-12">
      <label for="rf-commentator">Category</label>
      <div id="rf-commentator" class="btn-group" data-toggle="buttons">

        <?php

            $sql = "SELECT * FROM category_table";
            $result = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    
                    print  '<label class="btn btn-default">
                            <input type="radio" value="'.$row['cat_id'].'" name="category" id="rf-commentator'.$row['cat_id'].'" autocomplete="off" >'.$row['category'].'</label>';


                }
              }


            ?>

        <!--<label class="btn btn-default active">
          <input type="radio" name="commentator" id="rf-commentator1" autocomplete="off" checked>Cat 1</label>
        <label class="btn btn-default">
          <input type="radio" name="commentator" id="rf-commentator2" autocomplete="off">Cat 2</label>
        <label class="btn btn-default">
          <input type="radio" name="commentator" id="rf-commentator3" autocomplete="off">Cat 3</label>
        <label class="btn btn-default">
          <input type="radio" name="commentator" id="rf-commentator4" autocomplete="off">Cat 4</label>
        <label class="btn btn-default">
          <input type="radio" name="commentator" id="rf-commentator5" autocomplete="off">Cat 5</label>-->
      </div>
    </div>
  </div>

 <div class="form-group">
    <label for="rf-articleDetail">Description</label>
    <textarea name= "description" class="form-control" rows="3" id="rf-articleDetail" placeholder="Description"></textarea>
  </div>

<h2 class="titular">Location</h1>

  <div class="row">
    <div class="form-group col-xs-6">
      <label for="rf-name">Main Town</label>
      <input type="text" class="form-control" id="rf-name" name="main town" placeholder="Main Town">
    </div>
    <div class="form-group col-xs-6">
      <label for="rf-age">Address</label>
      <input type="text" class="form-control" id="rf-age" name="address" placeholder="Address">
    </div>
    
  </div>

<h2 class="titular">Scope of Project</h1>

  <div class="row">
    <div class="form-group col-xs-4">
      <label for="rf-articleName">Budget</label>
      <input type="text" class="form-control" name="budget" id="rf-articleName" placeholder="Budget">
    </div>
    <div class="form-group col-xs-4">
      <label for="rf-articleLink">Date of Closure</label>
      <input type="text" class="form-control" name="date closure" id="rf-articleLink" placeholder="Date of Closure">
    </div>
    <div class="form-group col-xs-4">
      <label for="rf-articleLink">Due Date</label>
      <input type="text" class="form-control" name="due date" id="rf-articleLink" placeholder="Due Date">
    </div>
  </div>
  <!--<div class="row">
    <div class="form-group col-xs-6">
      <label for="rf-commentCount">Comment</label>
      <input type="text" class="form-control" id="rf-commentCount" placeholder="Comment">
    </div>
    <div class="form-group col-xs-6">
      <label for="rf-viewCount">View Count</label>
      <input type="text" class="form-control" id="rf-viewCount" placeholder="View Count">
    </div>
  </div>
  <div class="form-group">
    <label for="rf-articleDetail">Description</label>
    <textarea class="form-control" rows="3" id="rf-articleDetail" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
    <label for="rf-articleType">Type</label>
    <textarea class="form-control" rows="3" id="rf-articleType" placeholder="Type"></textarea>
  </div>

  <div class="row">
    <div class="form-group col-xs-12">
      <label for="rf-orderType">Services</label>
      <div id="rf-orderType" class="btn-group" data-toggle="buttons">

        <label class="btn btn-default active">
          <input type="radio" name="orderType" id="rf-orderType1" autocomplete="off" checked>Service 1</label>
        <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType2" autocomplete="off">Service 2</label>
        <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType3" autocomplete="off">Service 3</label>
      <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType4" autocomplete="off">Service 4</label>
      <label class="btn btn-default">
          <input type="radio" name="orderType" id="rf-orderType5" autocomplete="off">Service 5</label>
      
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-6">
      <label for="rf-commentLevel">อยากให้เขียนแบบไหน?</label>
      <div id="rf-commentLevel" class="btn-group" data-toggle="buttons">

        <label class="btn btn-default active">
          <input type="radio" name="commentLevel" id="commentLevel1" autocomplete="off" checked>โหด</label>
        <label class="btn btn-default">
          <input type="radio" name="commentLevel" id="rf-commentLevel2" autocomplete="off">ปานกลาง</label>
        <label class="btn btn-default">
          <input type="radio" name="commentLevel" id="rf-commentLevel3" autocomplete="off">ต่ำ</label>
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label for="rf-commentHonesty">อยากให้เขียนตรงๆ ไหม?</label>
      <div id="rf-commentHonesty" class="btn-group" data-toggle="buttons">

        <label class="btn btn-default active">
          <input type="radio" name="commentHonesty" id="rf-commentHonesty1" autocomplete="off" checked>ตรงๆ เลย</label>
        <label class="btn btn-default">
          <input type="radio" name="commentHonesty" id="rf-commentHonesty2" autocomplete="off">ไม่อ่ะ</label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-6">
      <label for="rf-ruleRead">อ่านกฏแล้วหรือยัง?</label>
      <div id="rf-ruleRead" class="btn-group" data-toggle="buttons">

        <label class="btn btn-default active">
          <input type="radio" name="ruleRead" id="rf-ruleRead1" autocomplete="off" checked>เรียบร้อย</label>
        <label class="btn btn-default">
          <input type="radio" name="ruleRead" id="rf-ruleRead2" autocomplete="off">ยังเลย</label>
      </div>
    </div>
    <div class="form-group col-xs-6">
      <label for="rf-fabAdd">แอดแฟบแล้วหรือยัง?</label>
      <div id="rf-fabAdd" class="btn-group" data-toggle="buttons">

        <label class="btn btn-default active">
          <input type="radio" name="fabAdd" id="rf-fabAdd1" autocomplete="off" checked>เรียบร้อย</label>
        <label class="btn btn-default">
          <input type="radio" name="fabAdd" id="rf-fabAdd2" autocomplete="off">ยังเลย</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="rf-otherInfo">อื่นๆ</label>
    <textarea class="form-control" rows="3" id="rf-otherInfo" placeholder="อื่นๆ"></textarea>
  </div>-->
  <input type="submit" class="btn btn-default" id="rf-submitBtn" value="submit" name="submitbtn">
</form>
<span>Powered by <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>, and <a href="http://jquery.com/" target="_blank">jQuery</a></span>



  
      </form>
    </div>
</div>


