<?php 
include("includes/connection.php");

if(isset($_POST['btnSubmit'])){
  print '<pre>'.print_r($_POST, 1).'</pre>';


  

  if(isset($_POST['cat_id'])){
  
  $category_id = $_POST['cat_id'];
  $category = $_POST['category'];


    $sql = "UPDATE category_table SET  category='$category' WHERE cat_id=".$category_id;

    if (mysqli_query($mysqli, $sql)) {
        print '<p>Record updated successfully</p>';
    } else {
        print '<p>Error updating record:' . mysqli_error($mysqli).'</p>';
    }


  }
  




}


$category = array();

if(isset($_GET['cat_id'])){
  print '<pre>'.print_r($_GET, 1).'</pre>';
  $category_id = $_GET['cat_id'];
  $sql = "SELECT * FROM category_table WHERE cat_id=" . $category_id;
  $result = mysqli_query($mysqli, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $category = mysqli_fetch_assoc($result);
        print '<pre>'.print_r($category, 1).'</pre>';
       
  }




}



?>


<form id="form1" name="form1" method="post" action="memberForm.php">
      <?php
if(isset($member['member_id'])){
?>

 <input type="hidden" name="member_id" value="<?php if(isset($member['member_id'])){print $member['member_id'];}?>">
<?php

}
      ?>
     


        <div class="member" id="member_details">
          
          <p>
            <p id="title"></p>
            <label for="txttitle">Title:</label>
            <select name="title" id="myTitle" onchange="myFunction()">
              <option value="mr">Mr. </option>
              <option value="mrs">Mrs. </option>
              <option value="ms">Ms. </option>
          </select>

              <script>

              function myFunction() {
                  var x = document.getElementById("myTitle").value;
                  document.getElementById("title").innerHTML;
                                  
              if (x == "mr") {
                  document.getElementById("male").checked = true;
              }
              else if (x == "mrs") {
                 document.getElementById("female").checked = true;
              }
              else if (x == "ms") {
                  document.getElementById("female").checked = true;
              }

              }
              </script>
              
          </p>

          <p>
            <label for="txtmemberfname">First Name:</label>
            <input type="text" name="txtmemberfname" id="txtmemberfname" value="<?php if(isset($member['fname'])){print $member['fname'];}?>">
          </p>
 
          <p>
            <label for="txtmemberlname">Last Name:</label>
            <input type="text" name="txtmemberlname" id="txtmemberlname" value="<?php if(isset($member['lname'])){print $member['lname'];}?>">
          </p>           


          <p>
          <label for="txtgender">Gender:</label>
          <input type="radio" id="male" name="gender" value="male" checked> Male
          <input type="radio" id="female" name="gender" value="female"> Female



          <p>
            <label for="txtaddress">Address:</label>
            <input type="text" name="txtaddress" id="txtaddress">
          </p>

          <p>
            <?php

            $sql = "SELECT * FROM tblhobbies";
            $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        
        print  '<input type="checkbox" value="'.$row['hobbyid'].'" name="hobbies[]">'.$row['hobbyname'].'<br>';
    }
  }



            ?>
            
          </p>
        
         
          <input type="submit" value="save" name="btnSubmit">
        </div>
      </form>