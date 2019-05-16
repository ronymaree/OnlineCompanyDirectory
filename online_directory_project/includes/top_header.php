

<div id="top_header">
  	<div class="action_section">
  		<ul>
			<li class="login"><a href="#">Login</a></li>
			<li class="signup"><a href="#">Sign Up</a></li>
		</ul>
		<div class="clearfix"></div>
	</div>

  	<div class="login_content">
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
		<p><input type="submit" name="buttonsignin" id="button" value="Log In"></p>
   </form>
  	</div>

  	<div class="signup_content">
  		<label style= "color: #336699; font-family: 'Exo', sans-serif; font-size: 20px; font-weight: 600; padding-left: 10px">Sign Up</label>
  		<table style="margin-top: 10px;">
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
  	</div>
</div>