<?php
include('includes/connection.php');
session_start();

if(!isset($_SESSION['userid']) || $_SESSION['userid'] == 0){
  header("location:index.php");
}


$page="tables";
  if (isset($_GET['page'])){
    $page=$_GET['page'];
  }



/*if(!isset($_SESSION['userid']) ){
  header('location:userprofile.php');
}*/

$user = array();

                $access_level = $_SESSION['access_level'];
                $userid = $_SESSION['userid'];

                print $access_level;
                print $userid;
                if($access_level == 1){
print 'hello1';

                  $sql = "SELECT * FROM customer_table WHERE login_id=" . $userid;
                  $result = mysqli_query($mysqli, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $user = mysqli_fetch_assoc($result);
                        //print '<pre>'.print_r($member, 1).'</pre>';
                       
                  }



                }
               


                //print '<pre>'.print_r($user, 1).'</pre>';

                /*if(isset($_GET['user_id'])){
                  print '<pre>'.print_r($_GET, 1).'</pre>';
                  $user_id = $_GET['user_id'];
                  $sql = "SELECT * FROM members WHERE member_id=" . $member_id;
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    $member = mysqli_fetch_assoc($result);
                        print '<pre>'.print_r($member, 1).'</pre>';
                       
                  }
                }*/


                  
                   /* if(isset($_POST['submit_upt'])){
                      $user_id = $_POST['user_id'];
                      $username = $_POST['username'];
                      $password = $_POST['password'];
                      $mail = $_POST['email'];
                      $dob = $_POST['date'];
                      $tel = $_POST['telephone'];
                      $gender = $_POST['gender'];

                      $query = "UPDATE user_table SET username='$username', password='$password', email='$mail', date_of_birth='$dob', telephone='$tel', gender='$gender' WHERE user_id=$user_id";
                      if(mysqli_query($mysqli,$query)){
                        print 'Update succesful';
                      }else{
                        print 'Update failed :'.mysqli_error($mysqli);
                      }
                    }
                    if($proceed){
                      $user = "SELECT * FROM user_table ORDER BY username ASC";
                      $res = mysqli_query($mysqli,$user);
                      
                    } */

                ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>Home Page</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div id="wrapper">
    <div id="main_content">
      
<div id="top_header">
    <div class="action_section">
         <div class="clearfix"></div>
  </div>
</div>

    <body>

        <div class="main-container">

            <!-- HEADER -->
            <header class="block">
                <ul class="header-menu horizontal-list">
                    <li>
                        <a class="header-menu-tab" href="adminprofile.php?page=tables"><span class="icon entypo-cog scnd-font-color"></span>Tables</a>
                    </li>

                    <li style="float:right;">
                        <a class="header-menu-tab"  href="index.php?action=logout"><span class="icon fontawesome-star-empty scnd-font-color"></span>Logout</a>
                    </li>
                </ul>
                <div class="profile-menu">
                    <!--<p>Me <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>
                    <div class="profile-picture small-profile-picture">
                        <img width="40px" alt="profile picture" src="http://www.readingfc.co.uk/images/common/bg_player_profile_default_big.png">
                    </div>-->
                </div>
            </header>

            <!-- LEFT-CONTAINER -->
            
            <!-- MIDDLE-CONTAINER -->
            <div class="left-container container">
                <div class="profile block"> <!-- PROFILE (MIDDLE-CONTAINER) -->
                    <a class="add-button" href="#28"><span class="icon entypo-plus scnd-font-color"></span></a>
                    <div class="profile-picture big-profile-picture clear">
                        <img width="150px" alt="profile picture" src="http://www.readingfc.co.uk/images/common/bg_player_profile_default_big.png" >
                    </div>
                    <h1 class="user-name">
                      <?php
                        if($access_level == 1){

                          print $user['first_name'];
                        }
                      ?>
                    </h1>
                    
                    <?php 
                        $sql = "SELECT * FROM customer_table WHERE login_id=" . $userid;
                        $result = mysqli_query($mysqli, $sql);
                        while($row = mysqli_fetch_assoc($result)){

                        print '<div class="profile-description">';
                        print '<p class="scnd-font-color">' .$row['email']. '</p>';
                        print '</div>';

                      }
                    ?>

                    </div>

                  </div>
            <!-- RIGHT-CONTAINER -->
            <div class="right-container container">
               
                <div class="join-newsletter block"> <!-- JOIN NEWSLETTER (RIGHT-CONTAINER) -->
                    <style>

                    .right-container {width: 75%; padding-right: 0px;}
                      .join-newsletter {
                        
                      }
                        .join-newsletter .titular {
                          padding-top: 10px;
                        }
                        .subscribe.button {
                          background: #11a8ab;
                          margin-top: 10px;
                        }
                          .subscribe.button:hover {
                            background: #0F9295;
                          }

                    </style>
                

                  <div id="main-content">
                    <p>
                    </p>
                    <?php include($page.'.php');?>
                  </div>
                </div>
            </div> <!-- end right-container -->
        </div> <!-- end main-container -->
    </body>


    </div>
  </div>
</body>
</html>

