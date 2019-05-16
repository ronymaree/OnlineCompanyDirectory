<?php

session_start();

if(isset($_GET['action']) && $_GET['action'] == 'logout'){

    $_SESSION['userid'] = 0;
    $_SESSION['access_level'] = 0;

}




?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home Page</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/stylehome.css" />



    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <link href="css/stylehome.css" rel="stylesheet"/>
    <link href="css/landing-page.css" rel="stylesheet">

</head>

<body>
 



<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Mauritius Online Directory</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navheadder" class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
               
                    </li>
                    <li class="login" ><a href="#">Login</a>
                    </li>
                    <li class="signup"><a href="#">Sign Up</a>
                    </li>
                </ul>
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  


<!--<div class="login_content">
  		<label style= "color: #336699; font-family: 'Exo', sans-serif; font-size: 20px; font-weight: 600; padding-left: 10px">Log In</label>
		<form action="login.php" method="POST">
		<table style="margin-top: 10px;">
		
        <td><label for="txtusername">Username:</label>
        	<p><label for="txtpassword">Password:</label></p>
        	<p><label for="access_level">Login as:</label></p></td>
		    <td><input type="text" name="txtusername" id="txtusername">
		    <p><input type="text" name="txtpassword" id="txtpassword"></p>
		    <p><select name="access_level">
		    	<option value="2">Company</option>
	    		<option value="3">Customer</option>
			</select></p></td>
    	</table>
		<p><input type="submit" name="buttonsignin" id="login-button" value="Log In"></p>
   </form>
  	</div>-->
    <script>
        $(document).ready(function(){
            $('.containersignup').hide();
            $('#navheadder  ul li.login a').click(function(e){
                e.preventDefault();
                $('.containersignup').hide();
                $('.containerlogin').fadeToggle();
            });

            $('#navheadder ul li.signup a').click(function(e){
                e.preventDefault();
                $('.containersignup').fadeToggle();
                $('.containerlogin').hide();
            });
        });
    </script>

  <div class="intro-header">

        <div class="wrapper">
        
            <div class="container" style="margin-top: 100px;">

                <div class="row">
                    <div id="wrapper" class="col-lg-12">

                       

                        <div id="logstatus" class="containerlogin">
                            <h1>Login</h1>
                            
                            <form class="form" action="login.php" method="POST">
                                <?php
                                if(isset($_GET['login_error'])){
                                    print '<div class="error">Invalid username or password</div>';
                                }

                                ?>
                                <input type="text" name="txtusername" id="txtusername" placeholder="Username">
                                <input type="password" name="txtpassword" id="txtpassword" placeholder="Password">
                                <!--<button type="submit" id="login-button">Login</button>-->
                                <input type="submit"f name="buttonsignin" id="login-button" value="Log In" style= "background-color:white;font-weight: 500;">
                                <p><select name="access_level">
                            
                                    <option value="2">Company</option>
                                    <option value="3">Customer</option>
                                    <option value="1">Admin</option>
                                </select></p></td>
                            </form>
                        </div>
                
                        <div id="logstatus" class="containersignup">
                            <h1>Sign Up</h1>
                            
                            <form class="form" action="sign_up.php" method="POST">
                                <input type="text" name="txtusername" id="txtusername" placeholder="Username">
                                <input type="password" name="txtpassword" id="txtpassword" placeholder="Password">
                                <!--<button type="submit" id="login-button">Sign Up 1</button>-->
                                <input type="submit" name="buttonsignup" id="button" value="Sign Up" style= "background-color:white;font-weight: 500;" >

                                <p><select name="access_level">
                                    <option value="company">Company</option>
                                    <option value="customer">Customer</option>
                                </select></p></td>
                            </form>
                        </div>

                

                        

                        <!--<div class="signup_content">
       
        <form action="sign_up.php" method="POST">
            <td><label for="txtusername">Username:</label>
                <p><label for="txtpassword">Password:</label></td>

            <td><input type="text" name="txtusername" id="txtusername"></p>
            <p><input type="password" name="txtpassword" id="txtpassword"></p></td>
        </table>
            <p><input type="radio" name = "usertype" value = "company" class="radiocompany" />Company
            <input type="radio" name = "usertype" value = "customer" class="radiocustomer" style= "margin-left: 10px; "/>Customer</p>
            <p><input type="submit" name="buttonsignup" id="button" value="Sign Up"></p>
        </form>
    </div>-->


                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </div>
    <!-- /.intro-header -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Accesible from anywhere,
                        <br>from any device</h2>
                    <p class="lead">Seek for services and make your request online from any devices anywhere you are. Register to become a member. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Register NOW
                        <br>as a User</h2>
                    <p class="lead">Get access to all the Local Service Providers! Get Quotes Now! </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/banner-772x250.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Register NOW
                        <br>as a Service Provider</h2>
                    <p class="lead">Get yourself known to the local market!</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/Register-Your-Business.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                   
                </div>
                

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

<script>

$(document).ready(function() {
    $('a[href=#]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });
})

</script>


    <!-- JavaScript -->
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <p class="copyright text-muted small">Copyright &copy; Mauritius Online Directory 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
