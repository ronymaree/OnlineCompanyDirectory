<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User Registration</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>



<body style="background-color:#1f253d;">
 

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
                        <a class="header-menu-tab" href="index.php?action=logout"><span class="icon entypo-cog scnd-font-color"></span>Cancel User Registration</a>
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

      <h1>User Registration</h1>

      <?php if(isset($_GET['lid']) && is_numeric($_GET['lid'])){?>
      <form id="form1" name="form1" method="post" action="register_user.php">

        <p>
          <label for="txtfirstname">First Name:</label>
          <input type="text" name="txtfirstname" id="txtfirstname">
        </p>
        <p>
          <label for="txtlastname">Last Name:</label>
          <input type="text" name="txtlastname" id="txtlastname">
        </p>
        <p>
          <label for="txtdob">Date of Birth:</label>
          <input type="date" name="txtdob" id="txtdob">
        </p>
        <p>
          <label for="txtmobnum">Mobile Number:</label>
          <input type="text" name="txtmobnum" id="txtmobnum">
        </p>
        <p>
          <label for="txtemail">Email:</label>
          <input type="email" name="txtemail" id="txtemail">
        </p>
        <p>
          <div class="btn-group">
          <input type="hidden" name="login_id" value="<?php echo $_GET['lid']; ?>" />
          <input type="button" name="btncancel" id="btncancel" value="Cancel">
          <input type="submit" name="submit" id="submit" value="Submit">
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






















  <div id="wrapper">
    <div id="main_content">
      
    </div>
  </div>
</body>
</html>
