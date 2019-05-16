<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Company Registration</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>

<body style="background-color:#1f253d;">
 
      <?php 
        include('includes/connection.php');
        if($proceed){
          $cat_query = "SELECT * FROM category_table ORDER BY category ASC";
          $cat_res = mysqli_query($mysqli,$cat_query);
          $output = "";
          while($cat = mysqli_fetch_assoc($cat_res)){
            $output .='<option value="'.$cat['cat_id'].'">'.$cat['category'].'</option>';
          }

          $service_query = "SELECT * FROM services_table ORDER BY service ASC";
          $ser_res = mysqli_query($mysqli,$service_query);
        }
      ?>
  


  <div id="wrapper">
    <div id="main_content">
      
<div id="top_header">
    <div class="action_section">
      <!--<ul>
      <li class="contact"><a href="index.php?action=logout">Logout</a></li>
    </ul>-->
    <div class="clearfix"></div>
  </div>
</div>

    <body>

        <div class="main-container">

            <!-- HEADER -->
            <header class="block">
                <ul class="header-menu horizontal-list">
                    <li>
                        <a class="header-menu-tab" href="index.php?action=logout"><span class="icon entypo-cog scnd-font-color"></span>Cancel Company Registration</a>
                    </li>
                    <!--<li>
                        <a class="header-menu-tab" href="#1"><span class="icon fontawesome-user scnd-font-color"></span></a>
                        <a class="header-menu-number" href="#4">5</a>
                    </li>
                    <li>
                        <a class="header-menu-tab" href="#2"><span class="icon fontawesome-envelope scnd-font-color"></span></a>
                        
                    </li>
                    <li>
                        <a class="header-menu-tab" href="#5"><span class="icon fontawesome-star-empty scnd-font-color"></span></a>
                    </li>-->
                </ul>


            <!-- RIGHT-CONTAINER -->
            <div class="right-container container" style="padding-left: 0px;">

               
                <div class="join-newsletter block" style="padding-left: 15px;"> <!-- JOIN NEWSLETTER (RIGHT-CONTAINER) -->
                    
                

                  <div id="main-content">
                    <p>
                    </p>
                    <h1>Company Registration</h1>
     
      <?php if(isset($_GET['lid']) && is_numeric($_GET['lid'])){ ?>
      <form id="form1" name="form1" method="post" action="register_company.php">
        <div class="company" id="company_details">
          <p>
            <label for="txtcompanyname">Company Name:</label>
            <input type="text" name="txtcompanyname" id="txtcompanyname">
          </p>
        
          <p>
            <label for="txtbrn">BRN No. :</label>
            <input type="text" name="txtbrn" id="txtbrn">
          </p>
        
          <?php include('includes/main_town.php'); ?>
            
          <p>
            <label for="txtaddress">Address:</label>
            <input type="text" name="txtaddress" id="txtaddress">
          </p>
        
          <p>
            <label for="txtzipcode">Zip Code:</label>
            <input type="text" name="txtzipcode" id="txtzipcode">
          </p>
          
          <p>
            <label for="txtnumemployees">Number of Employees:</label>
            <input name="txtnumemployees" type="number" id="txtnumemployees" min="1" value="1" style="color: black;">
          </p>
        </div>
        
        <h3>Owner Details</h3>
        
        <div class="company" id="owner_details">
          <p>
            <label for="txtfirstname">First Name:</label>
            <input type="text" name="txtfirstname" id="txtfirstname">
          </p>
        
          <p>
            <label for="txtlastname">Last Name:</label>
            <input type="text" name="txtlastname" id="txtlastname">
          </p>
        
          <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" style="color: black;">
          </p>
        
          <p>
            <label for="txttelmob">Mobile Telephone Number:</label>
            <input type="text" name="txttelmob" id="txttelmob">
          </p>
        
          <p>
            <label for="txttelother">Landline Telephone Number:</label>
            <input type="text" name="txttelother" id="txttelother">
          </p>
        
          <p>
            <label for="txtfax">Fax Number:</label>
            <input type="text" name="txtfax" id="txtfax">
          </p>
          
          <p>
            <label for="txtwebsite">Website:</label>
            <input type="text" name="txtwebsite" id="txtwebsite">
          </p>
          
        </div>
        
        <h4>Specialisation</h4>
        
        <div class="company" id="specialisation">
          <table border=1>
            <?php 
            $service_counter = 0;
            while($services = mysqli_fetch_assoc($ser_res)){
              print '<tr>';
              print '<td><input type="checkbox" name="service'.$service_counter.'" value="'.$services['service_id'].'" id="checkbox'.$service_counter.'"><label for="checkbox'.$service_counter.'">'.$services['service'].'</label></td>';
              print '<td><select name="select'.$service_counter.'[]" id="select" multiple>'.$output.'</select></td>';
              print '</tr>';
              $service_counter++;
            } ?>
          </table>
        </div>
        
        <p>
          <div class="btn-group">
          <input type="hidden" name="login_id" value="<?php echo $_GET['lid']; ?>" />
          <input type="submit" name="submit" id="submit" value="Submit">
          <input type="button" name="button" id="button" value="Button">
          <input type="reset" name="reset" id="reset" value="Reset">
          </div>
        </p>
      </form>
      <?php }else{
        header('Location:index.php');
      } ?>
                  </div>
                </div>
            </div> <!-- end right-container -->
        </div> <!-- end main-container -->
    


    </div>
  </div>
</body>
</html>














